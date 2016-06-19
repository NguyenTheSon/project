<?php
//Tầng Model: dùng chung cho cả trang admin và trang người dùng
class LIB
{
	public $pdo;//Thuộc tính sẽ chứa tham chiếu đối tượng PDO
	protected $config;
	//PT tự động chạy khi đối tượng khởi tạo
	function __construct($cf)
	{
		//Lệnh try catch: bắt lỗi (nếu có)
		try{
			$this->config=$cf;
			//Biến dsn: chứa tên host và tên CSDL
			$dsn=$cf['server'].':host='.$cf['host'].';dbname='.$cf['db'];
			//Chạy lệnh khởi tạo đối tượng PDO
			$this->pdo= new PDO($dsn,$cf['user'],$cf['pass']);//Tham chiếu đối tượng lên $pdo
			$this->pdo->exec("SET NAMES 'utf8'");//Chạy lệnh xác định CSDL là utf8
		}catch(Exception $ex)
		{
			//Khi hàm chạy sẽ dừng toàn bộ chương trình và in ra  "Error Connection"
			die('Error Connection');
		}
	}
	
	private $totalpage=0;//Thuộc tính chứa giá trị là tổng số trang
	
	
	//PT sellectall : lấy dữ liệu từ 1 bảng và trả về mảng 2 chiều 
	
	function selectall($table,$p=0,$where='',$m=false)
	{//$p: Số phần tử quy định trên 1 trang
		
		//B1: Xậy dựng câu lệnh SQL: lấy dữ liệu từ bảng ra
		$sqldata="SELECT * FROM $table ";
		if($where!='')$sqldata.=" WHERE $where ";
		$sqldata.=" ORDER BY id DESC";
		//B2: Chạy lệnh truy vấn trên
		$re=$this->pdo->query($sqldata);
		//B3: TRả về dữ liệu là mảng 2 chiều
		if(!$re)die($sqldata);
		if($p>0)
		{//Lập trình phân trang ở đây
			$total=$re->rowCount();//Lấy ra tổng số dữ liệu có dc từ câu truy vấn bên trên
			$this->totalpage=ceil($total/$p);//Tính ra tổng số trang
			//Lấy biến phân trang trên URL xuống (nếu có)
			if(isset($_GET['page']))$page=$_GET['page']; else $page=1;
			if($m==true)$page=1;
			$thutu=($page-1)*$p;//Công thức tính thứ tự bản ghi sẽ lấy
			$sqldata.=" LIMIT $thutu,$p";//Xây dựng câu lênh mới có nối thêm LIMIT
			$re=$this->pdo->query($sqldata);//Chạy câu lệnh mới bên trên
		}
		if(!$re) die('Error Query: '.$sqldata);
		else return $re->fetchAll(PDO::FETCH_ASSOC);//PT trả về mảng 2 chiều
		//PDO::FETCH_ASSOC: Cấu hình mảng dạng theo tên
	}
	
	function selectone($table,$where='')
	{
		$sqldata="SELECT * FROM $table ";
		if($where!='')$sqldata.=" WHERE $where ";
		$sqldata.=" ORDER BY id DESC";
		$re=$this->pdo->query($sqldata);
		if($re->rowCount()>0) return $re->fetch(PDO::FETCH_ASSOC);
		else return false;
	}
	
	function viewpage($link)
	{
		echo '<ul class="pagination">';
		echo '<li> <a href="'.$link.'&page=1" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
		
		if(isset($_GET['page']))$page=$_GET['page']; else $page=1;
		$begin=$page-5;
		$end=$page+5;
		if($begin<1)$begin=1;
		if($end>$this->totalpage)$end=$this->totalpage;			
		for($i=$begin;$i<= $end; $i++)
		{
			echo ' <li><a href="'.$link.'&page='.$i.'">'.$i.'</a></li>';
		}
		echo '<li> <a href="'.$link.'&page='.$this->totalpage.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';	
		echo '</ul>';
	}
	//Phương thức thêm mới dữ liệu vào 1 bảng
	function insert($table,$data,$dir='../upload/')
	{//$table: Bảng dc thêm dữ liệu, $data: dữ liệu thêm
		$result=$this->uploadfile($dir);
		if(is_array($result))$data=array_merge($data,$result);
		///
		$dscot='';
		$dsgiatri='';
		//Vòng lặp lấy ra các cột trong bảng và dữ liệu sẽ thêm
		foreach($data as $key=>$val)
		{
			if($dscot=='')$dscot=$key;
			else $dscot.=','.$key;
			if($dsgiatri=='')$dsgiatri="'$val'";
			else $dsgiatri.=",'$val'";
		}
		//Xây dựng câu lệnh thêm mới 
		$strAdd="INSERT INTO $table ($dscot) VALUES ($dsgiatri) ";
		//Chạy lệnh thêm mới
		$this->pdo->exec($strAdd);
		//Trả về ID mới dc thêm của bảng
		return  $this->pdo->lastInsertId();
	}
	
	
	function update($table,$data,$id,$dir='../upload/')
	{//$table: Bảng dc thêm dữ liệu, $data: dữ liệu thêm
		$result=$this->uploadfile($dir);
		if(is_array($result))$data=array_merge($data,$result);
		$dscot='';
		//Vòng lặp lấy ra các cột trong bảng và dữ liệu sẽ thêm
		foreach($data as $key=>$val)
		{
			if($dscot=='')$dscot=$key."='$val'";
			else $dscot.=','.$key."='$val'";
		}
		//Xây dựng câu lệnh thêm mới 
		$strAdd="UPDATE  $table SET $dscot WHERE id=$id ";
		//Chạy lệnh thêm mới
		return $this->pdo->exec($strAdd);
	}
	//Phương thức Xóa dữ liệu\
	function delete($table,$id)
	{
		$strdel="DELETE FROM $table WHERE id=$id";
		return $this->pdo->exec($strdel);
	}
	
	function uploadfile($dir)
	{
		$result=array();
		$error='';
		foreach($_FILES as $key=>$file)
		{
			$name=$file['name'];//Lấy tên File đc Upload
			$type=$file['type'];//Kiểu file đc upload: MIME
			$temp=$file['tmp_name'];//Đường dẫn đến file tạm 
			//$error=$file['error'];//Phần tử lưu mã lỗi (nếu có): 0: ko có lỗi
			$size=$file['size'];//Dung lượng file (byte)
			if(strpos($type,'image')===false) $error.=' Loại file không được phép, ';
			else
			{
				if($size<=2000*1024)
				{
					if(move_uploaded_file($temp,$dir.$name))
					{
						if(!getimagesize($dir.$name)){
							 unlink($dir.$name);//Xóa file
							 $error.= 'É é, không được hack, ';
						}else{
							//UPLOAD file đã thành công
							$result[$key]=$dir.$name;
						}
					}else $error.= 'Upload không thành công, ';
				}else $error.= 'Dung lượng file phải nhỏ hơn 200kb, ';
			}
		}
		if(count($result)) return $result;
		else $error;
	}
	
	function viewcate($parent=0)
	{
		$strlay="SELECT * FROM tbcategory WHERE parent=$parent ";
		$re=$this->pdo->query($strlay);
		if(!$re)die($strlay);//Kiểm tra lỗi nếu có
		$str='';
		if($re->rowCount()>0)
		{
			if($parent==0)$str= '<ul class="category">';
			else $str='<ul>';
			foreach($re->fetchAll() as $item)
			{
				$str.='<li>';
				$str.='<a href="'.$this->config['url'].'index.php?prog=product&idcate='.$item['id'].'">';
				if($parent==0)$str.='<img src="'.$item['icon'].'" width="33" height="21" >';
				$str.='<b>'.$item['title'].'</b></a>';
				$str.=$this->viewcate($item['id']);
				$str.='</li>';
			}
			$str.= '</ul>';
		}
		return $str;
	}
	
	//Phương thức: tìm tất cả các ID con trong 1 cây đa cấp
	function findid($parent)
	{
		$list=$parent;
		$strlay="SELECT * FROM tbcategory WHERE parent=$parent";
		$re=$this->pdo->query($strlay);
		if(!$re)die($strlay);//Kiểm tra lỗi nếu có
		foreach($re->fetchAll() as $item)
			$list.=','.$this->findid($item['id']);
		return $list;
	}
	//$id: id của sản phẩm, $sl: số lượng mua, $type: kiểu update (false: Cộng thêm, true: thay thế)
	//Phương thức shopping : Quản lý giỏ hàng
	function shopping($id,$sl=1,$type=false)
	{
		if(!is_numeric($sl))$sl=0;//Tránh việc số lượng là chữ cái
		$sl= ceil(abs($sl));//Số âm, hoặc thập phân -> chuyển thành nguyên dương
		//Nếu session Cart chưa có thì khởi tạo
		if(!isset($_SESSION['cart']))$_SESSION['cart']=array();
		//Nếu id sản phẩm có trong giỏ hàng thì: sửa, xóa
		if(isset($_SESSION['cart'][$id]))
		{
			if($sl==0) unset($_SESSION['cart'][$id]);//Xóa sản phẩm khỏi giỏ hàng
			elseif($type) $_SESSION['cart'][$id]=$sl;//Sửa số lượng sản phẩm (thay thế số lượng mới)
			else $_SESSION['cart'][$id]=$_SESSION['cart'][$id]+$sl;//Sửa số lượng sản phẩm (cộng thêm số lượng)
		}elseif($sl>0) $_SESSION['cart'][$id]=$sl;//Thêm mới 1 sản phẩm vs số lượng của nó
	}
	
	function progress($percent,$class)
	{
		echo '<div class="progress">
		  <div class="progress-bar '.$class.' progress-bar-striped active" role="progressbar" aria-valuenow="'.$percent.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$percent.'%">
			<span class="sr-only">'.$percent.'</span>
		  </div>
		</div>';
	}
	//Phương thức trả vể tổng doanh thu trong 1 khoảng thời gian
	function gettotal($begin,$end)
	{
		//Xây dựng câu lệnh truy vấn 
		$strquery="SELECT SUM(tongtien) AS total FROM tbhoadon WHERE trangthai=4 AND date >='$begin' AND date <= '$end' ";
		$re= $this->pdo->query($strquery);//Chạy lệnh truy vấn
		if(!$re)die('Error '.$strquery);//Kiểm tra giá trị trả vể của PT query
		$row=$re->fetch(PDO::FETCH_ASSOC);//Lấy 1 dòng dữ liệu có dc
		return $row['total'];//PT trả vể tổng tiền hóa đơn tính dc
	}
	
	//Checkbox role
	function cbr($idtk,$idrole,$action='')
	{
		$one=$this->selectone('tbtaikhoan_role','idtaikhoan='.$idtk.' AND idrole='.$idrole);
		if($one)
		{
			if($action=='') return 'checked';
			else{
				if(strpos($one['action'],$action)===false) return '';
				else return 'checked';
			}
		}else return '';
	}
	//Phương thức xử lý đăng nhập: $user=' OR 1=1
	
	
	function login($user,$pass)
	{
		$strquery="SELECT * FROM tbtaikhoan WHERE  pass=? AND user=?";
		$re=$this->pdo->prepare($strquery);//Đưa truy vấn vào trạng thái chờ
		$re->execute(array($pass,$user));
		//Kiểm tra nếu có dữ liệu thì trả về mảng 1 chiều thông tin tài khoản
		if($re->rowCount()>0) return $re->fetch(PDO::FETCH_ASSOC);
		else return false;
	}
	//Phương thức kiểm tra quyền của 1 tài khoản
	function checkrole($idtk,$prog,$action='')
	{
		$strquery="SELECT * FROM tbtaikhoan_role WHERE  idtaikhoan=? AND action LIKE '%$action%' AND idrole IN (SELECT id FROM tbrole WHERE prog=?)";
		$re=$this->pdo->prepare($strquery);
		$re->execute(array($idtk,$prog));
		if($re->rowCount()>0) return true;
		else return false;
	}
	//Phương thức gửi mail
	function sendmail($email,$name,$Subject,$Body)
	{
		require('class.phpmailer.php');
		//Phần 1: Cấu hình kết nối đến Mail Server SMTP của gmail (google)
		$mail=new PHPMailer;//Khởi tạo thư viện PHPmailer
		$mail->IsSMTP();//Gọi PT khai báo cơ chế gửi mail là SMTP
		$mail->Host='smtp.gmail.com';//Khai báo địa chỉ mail server
		$mail->Port=465;//Cổng chạy dịch vụ gửi mail
		$mail->SMTPAuth=true;//Bật chế độ xác nhận tài khoản
		$mail->Username='php0715e@gmail.com';//Tên đăng nhập đã đăng ký trên gmail
		$mail->Password='php0715e123!@#';//Mật khẩu tương ứng
		$mail->SMTPSecure='ssl';//Cơ chế bảo mật mail
		//Phần 2: Cấu hình nội dung gửi mail
		$mail->AddAddress($email,$name);//Địa chỉ và tên người nhận thư
		$mail->FromName='T3h';//Tên người gửi thư
		$mail->Subject=$Subject;//Tiêu đề thư
		$mail->Body=$Body;//Nội dung của thư
		$mail->IsHTML(true);//Cho phép nội dung mail là dạng HTML
		$mail->CharSet='utf8';//Cấu hình nội dung là tiếng việt
		$mail->Send();//Gửi mail 
		return $mail->ErrorInfo;//THuộc tính chứa lỗi khi gửi mail (nếu có)
	}
	//Phương thức setcount: Đếm lượt truy cập vào website
	function setcount()
	{
		if(!isset($_SESSION['connect']))
		{//Nếu lần đầu truy cập thì đếm lượt
			$ip=$_SERVER['REMOTE_ADDR'];//Lấy ra IP người truy cập
			$code=md5(time().$ip.rand().'-'.rand());
			$_SESSION['connect']=$code;//Gán giá trị cho biến SESSION
			$add['code']=$code;
			$add['ip']=$ip;
			$add['time']=time();
			$this->insert('tbcounter',$add);//Thêm 1 lượt truy cập vào bảng tbcounter
		}
	}
	//Phương thức getcount: Lấy ra số người truy cập: 1 đối số type=true
	function getcount($type=true)
	{
		//Quy định $type=true: lấy tất cả lượt truy cập, false: lấy lượt online (30 phút trở lại hiện tại)
		$strquery="SELECT * FROM tbcounter";
		if(!$type){
			$begin=time()-1800;
			$strquery.=" WHERE time > $begin ";
		}
		$re=$this->pdo->query($strquery);//Chạy câu lệnh
		return $re->rowCount();//TRả về tổng số dòng dữ liệu
	}
	
}









