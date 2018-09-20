{include file='header.tpl'}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3" style="margin-top: 60px;">
                        <h3>Find call requests on your site</h3>
                        <p>Here you can find all call requests on your site by providing your domain in given form below.</p>
                        <form action="index.php?p=login_user_process" method="post" id="user_action_form">
                            <div class="form-group">
                                <label for="domain">Enter Your Domain <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="domain" name="domain" required>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                        {if !empty($error)}
                            <div class="alert alert-danger fade in alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                                <strong>Error !!</strong> {$error}
                            </div>
                        {/if}
                    </div>
                <div>
            </div>
        </div>
    </div>
{include file='footer.tpl'}