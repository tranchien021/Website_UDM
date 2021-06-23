<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<style>
		.contain{
			display: flex;
			justify-content: space-around;
		}
	</style>
</head>
<body>
	<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error fugit voluptates, deserunt amet laboriosam quisquam assumenda laudantium magni sapiente. Assumenda, ullam! Odit placeat consectetur voluptate eum animi voluptatibus quae sunt!</p>
	<div id="meo">
		<div id="container">
		
		<?php 
            $stt=0;
            foreach ($data as $key => $value) {
        ?>
        <div class="contain" id="<?php echo 'product'.$stt; ?>" >
        	<div id="<?php echo 'divquan'.$stt; ?>" >
        		<input type="text" value="<?php echo $value['quanlity']; ?>" id="<?php echo 'quan'.$stt; ?>" style="width:30px"	>
           	    
           </div>
            <h2><?php echo  $value['name']; ?></h2>
           <div id="<?php echo 'giatien'.$stt; ?>" >
           	    <h2 id="<?php echo 'tien'.$stt; ?>" >
           	    	<?php echo number_format( $value['quanlity']*20000,0); ?>
                </h2>
           </div>
            <a class="updateCartById" data-id="<?php echo $stt; ?>" href="<?php echo URLSUB.'cart/update1/'.$value['id'];  ?>">Sửa</a>
        </div>
        <?php 
            $stt++;
            }
        ?>
	</div>
	</div>
	<div id="aa">
		<h1>Order Total:</h1>
        <div id="bb">
            <?php 
            $tong=0;
            foreach($data as $value)
            {
                 $tong += $value['quanlity']*20000;
            }
            echo $tong;
            ?>
     </div>
     </div>
     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error fugit voluptates, deserunt amet laboriosam quisquam assumenda laudantium magni sapiente. Assumenda, ullam! Odit placeat consectetur voluptate eum animi voluptatibus quae sunt!</p>
	    <script type="text/javascript">
        $('a.updateCartById').click(function(event){
          event.preventDefault();
          var href=$(this).attr("href");
         
          var temp1='#tien'+$(this).attr('data-id');
          var temp2='#giatien'+$(this).attr('data-id');
          var divquan='#divquan'+$(this).attr('data-id');
          
          var quan='#quan'+$(this).attr('data-id');
           var qty=parseInt($(quan).val());
          var product='#product'+$(this).attr('data-id');
          $.ajax({
            url:href,
            type:'POST',
            data:{qty:qty},
            success:function(res){   
                if(res.trim()=='Xóa thành công'){
                	 swal(res,"","success");
                    $(product).empty();
                }else{
                	 swal(res,"","success");
	              $(temp2).load("http://localhost:8080/MVC_DOAN1/cart/index "+temp1);
	              $("#bb").load("http://localhost:8080/MVC_DOAN1/cart/index #bb");
	              $(divquan).load("http://localhost:8080/MVC_DOAN1/cart/index "+quan);
	            }
            }
            });
        });
       
    </script>
</body>
</html>