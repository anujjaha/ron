<div class="form-box" id="login-box">
    
       
            <?php 
            $flash = "";
            $authflash = "";
            $flash = $this->Session->flash();
            $authflash = $this->Session->flash('auth');
            if(strlen($flash) > 1 || strlen($authflash) > 1 )
            {
            ?>
            <div class="alert alert-warning alert-dismissable">
            <i class="fa fa-warning"></i>
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <b>Alert!</b>
            <?php 
            echo $flash;
            echo $authflash; 
            ?>
            </div>
            <?php
            }
            ?>
        
            
            <div class="header">Sign In</div>
           <?php
            
            echo $this->Form->create('User');
           ?>
            
            
                <div class="body bg-gray">
                    <div class="form-group">
                        <?php 
                            echo $this->Form->input('username',
                                                    array('class'=>'form-control',
                                                          'placeholder'=>'User Name'
                                                        )
                                    );
                        ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('password',
                                                    array('class'=>'form-control',
                                                          'placeholder'=>'Password',  
                                                           )
                                                    );
                        ?>
                    </div>          
                    <div class="form-group">
                        <?php
                        echo $this->Form->input('rememberMe',
                                                array('type' => 'checkbox', 'label' => 'Remember me','div'=>false)
                                                ); 
                        ?>

                        
                    </div>
                </div>
                <div class="footer">                                                               
                    <?php 
                        $options = array('label'=>'Sign me in','class'=>'btn bg-olive btn-block',
                                         'div'=>false
                                        );
                        echo $this->Form->end($options);
                    ?>
                   <p><a href="#">I forgot my password</a></p>
                    
                    <a href="register.html" class="text-center">Register a new membership</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


<?php
/*
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>


*/?>