<?php 
function xemmang($a)
{
	echo '<pre>',print_r($a),'</pre>';
}
function myupload($file,$thumuc,$loaifile=array('jpg','png','gif'),$maxsize=1,$tenfile='file_')
	{
		if(is_array($file))
		{
			if(isset($file['name'],$file['size'],$file['tmp_name'],$file['type'],$file['error']) && $file['error']==0)
			{
				//kiem tra kich thuox file
				$size = $maxsize*1024*1024;
				if($file['size']>0 && $file['size']<=$size)
				{
					//kiem tra loai file
					//lay duoi file
					//abc.jpg;
					$duoi = substr($file['name'],strrpos($file['name'],'.')+1);//>jpg
					//dung mang
					//$ar = explode('.',$file['name']);
					//$duoi2 = $ar[count($ar)-1];//=>jpg
					if(in_array($duoi,$loaifile))
					{
						//ten trung
						$newname= $tenfile.time().'.'.$duoi;
						$fullpath= $thumuc.'/'.$newname;
						if(move_uploaded_file($file['tmp_name'],$fullpath))
							return $fullpath;
						else
							return false;
					}
					return false;
				}	
				return false;	
			}
			return false;
		}
		return false;
	}
?>