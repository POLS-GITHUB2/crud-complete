<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="<?php echo base_url('Login');?>" role="form">	
    <!--<?#php echo form_open('Login/UserLogin');?>-->
    <span class="login100-form-title">
        <h1>Sign In</h1>
    </span>

    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
        <!--<input class="input100" type="password" name="uname" placeholder="User Name">-->
        
        <?php
        
            $name = array(
            'name' => 'uname',
            'id' => 'name',
            'required' => 'required',
            'placeholder' => 'User Name',
            'class' => 'input100'
          //  'value' =>  set_value('uname')
            );
            echo form_password($name);
           // echo validation_errors();
        
        ?>
        
        <span class="focus-input100"></span>
    </div>
    
    <div class="col-lg-16">
        <?php echo form_error('uname',"<p class='text-danger'>","</p>");?>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
        <!--<input class="input100" type="password" name="pass" placeholder="Password">-->
        
        <?php
        
            $name = array(
            'name' => 'pass',
            'id' => 'name',
            'required' => 'required',
            'placeholder' => 'Password',
            'class' => 'input100'
           // 'value' =>  set_value('uname')
            );
            echo form_password($name);
          //  echo validation_errors();
        
        ?>
        <span class="focus-input100">
        </span>
    </div>
    
    <div class="col-lg-16">
        <?php echo form_error('pass',"<p class='text-danger'>","</p>");?>
    </div>

    <div class="text-right p-t-13 p-b-23">
        
        <!--<?#php echo validation_errors();?>-->
        <!--span class="txt1">
            Forgot
        </span>
    
        <a href="#" class="txt2">
            Username / Password?
        </a-->
    </div>

    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            Sign in
        </button>
    </div>

    <div class="flex-col-c p-t-70 p-b-40">
        <span class="txt1 p-b-9">
            Don’t have an account?
        </span>

        <a href="#" class="txt3">
            Sign up now
        </a>
    </div>
</form>