<body data-open="click" data-menu="vertical-menu" data-col="1-column"
      class="vertical-layout vertical-menu 1-column bg-login">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">                
                <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-1">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header no-border">
                            <div class="card-title text-xs-center" >
                                <div class="p-1"><img width="100%"  src="<?php echo substr_replace(base_url(), '', -4); ?>userfiles/company/<?php echo $this->config->item('logo'); ?>"
                                                      alt="Logo"></div>
                            </div>
                            <h4 class="card-subtitle line-on-side text-muted text-xs-center  pt-2"><span><?php echo $this->lang->line('Customers')  ?> <?php echo $this->lang->line('login')  ?></span>
                            </h4>
                        </div>
                        <!-- <div>
                            <video id="preview" style="height: 253px;margin: 0px 0 0 25px;transform: scaleX(-1);"></video>
                        </div> -->
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <?php if ($this->session->flashdata("messagePr")) { ?>
                                    <div class="alert alert-info">
                                        <?php echo $this->session->flashdata("messagePr") ?>
                                    </div>
                                <?php } ?>
                                <form class="form-horizontal form-simple"
                                      action="<?php echo base_url() . 'user/auth_user'; ?>" method="post">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    <fieldset class="form-group position-relative has-icon-left mb-2">
                                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                                        <div class="form-control-position">
                                            <i class="icon-head"></i>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left mb-2">
                                        <input type="password" name="password" class="form-control" id="pwd"
                                               placeholder="Password" required>
                                        <div class="form-control-position">
                                            <i class="icon-key3"></i>
                                        </div>
                                    </fieldset>

                                    <input value="" name="qrcode" id="qrcode" type="hidden">

								<?php if ($captcha_on) {
                                        echo '<script src="https://www.google.com/recaptcha/api.js"></script>
									<fieldset class="form-group position-relative has-icon-left">
                                      <div class="g-recaptcha" data-sitekey="'.$captcha.'"></div>
                                    </fieldset>';
                                    } ?>


                                   
                               <div class="row">
                                   
                               </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block"><i
                                                class="icon-unlock2"></i> Login
                                    </button>
                					<p></p>
                					<div class="col-md-12 float-right mb-2">
                                   	    Don't have an account ? <a href="<?php echo site_url(); ?>user/register" class="float-right">Register</a>
                                   	</div>
                                </form> 
                                <?php    if ($this->common->front_end()->register) { ?> <br> <div class="row"><span class="col-xs-7"><a
                                                    href="<?php echo base_url('user/registration'); ?>" class="card-link">
                                               <?php echo $this->lang->line('Register')  ?></a></span><span class="col-xs-5"><a
                                                    href="<?php echo base_url('user/forgot'); ?>" class="card-link">
                                          <?php echo $this->lang->line('forgot_password')  ?>?</a></span></div>
                                <?php } ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section> 
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/6.1.4/adapter.min.js" type="text/javascript"></script>
<script src="<?php echo assets_url(); ?>crm-assets/js/instascan.min.js" type="text/javascript"></script>

<script type="text/javascript">
  let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
  
  Instascan.Camera.getCameras().then(function (cameras) {
    if (cameras.length > 0) {
      scanner.start(cameras[0]);
    } else {
      console.error('No cameras found.');
    }
  }).catch(function (e) {
    console.error(e);
  });

  scanner.addListener('scan', function (c) {
    document.getElementById('qrcode').value = c; 
    document.forms[0].submit();
    //console.log(content);
  });

</script>