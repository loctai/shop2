

<style>

#loading-center{
	width: 100%;
	height: 100%;
	position: relative;
	}
#loading-center-absolute {
	position: absolute;
	left: 50%;
	top: 50%;
	height: 20px;
	width: 140px;
	margin-top: -10px;
	margin-left: -70px;
	-webkit-animation: loading-center-absolute 1s infinite;
	animation: loading-center-absolute 1s infinite;

}
.object{
	width: 20px;
	height: 20px;
	background-color: <?php echo $preloader_obj; ?>;
	float: left;
	-moz-border-radius: 50% 50% 50% 50%;
	-webkit-border-radius: 50% 50% 50% 50%;
	border-radius: 50% 50% 50% 50%;
	margin-right: 20px;
	margin-bottom: 20px;	
}
.object:last-child {
	margin-right: 0px;

}
#object_one{
	-webkit-animation: object_one 1s infinite;
	animation: object_one 1s infinite;
	}
#object_two{
	-webkit-animation: object_two 1s infinite;
	animation: object_two 1s infinite;
	}	
#object_three{
	-webkit-animation: object_three 1s infinite;
	animation: object_three 1s infinite;
	}		
#object_four{
	-webkit-animation: object_four 1s infinite;
	animation: object_four 1s infinite;
	}		
	
@-webkit-keyframes loading-center-absolute{
100% {
   -ms-transform: rotate(360deg); 
   	-webkit-transform: rotate(360deg); 
    transform: rotate(360deg); 
	}			
	
}		
@keyframes loading-center-absolute{
100% {
    -ms-transform: rotate(360deg); 
   	-webkit-transform: rotate(360deg); 
    transform: rotate(360deg); 
	}
}	
	
	
								

@-webkit-keyframes object_one{
50% {
    -ms-transform: translate(20px,20px); 
   	-webkit-transform: translate(20px,20px);
    transform: translate(20px,20px);
	}
}		
@keyframes object_one{
50% {
     -ms-transform: translate(20px,20px); 
   	-webkit-transform: translate(20px,20px);
    transform: translate(20px,20px);
	}
}


@-webkit-keyframes object_two{
50% {
    -ms-transform: translate(-20px,20px); 
   	-webkit-transform: translate(-20px,20px);
    transform: translate(-20px,20px);
	}
}		
@keyframes object_two{
50% {
    -ms-transform: translate(-20px,20px); 
   	-webkit-transform: translate(-20px,20px);
    transform: translate(-20px,20px);
	}
}



@-webkit-keyframes object_three{
50% {
    -ms-transform: translate(20px,-20px); 
   	-webkit-transform: translate(20px,-20px);
    transform: translate(20px,-20px);
	}
}		
@keyframes object_three{
50% {
    -ms-transform: translate(20px,-20px); 
   	-webkit-transform: translate(20px,-20px);
    transform: translate(20px,-20px);
	}
}



@-webkit-keyframes object_four{
50% {
    -ms-transform: translate(-20px,-20px); 
   	-webkit-transform: translate(-20px,-20px);
    transform: translate(-20px,-20px);
	}
}		
@keyframes object_four{
50% {
    -ms-transform: translate(-20px,-20px); 
   	-webkit-transform: translate(-20px,-20px);
    transform: translate(-20px,-20px);
	}
}




</style>
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>



