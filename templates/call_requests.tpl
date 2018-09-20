{include file='header.tpl'}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-10"><h2>Call Requests</h2></div>
                    <div class="col-md-2"><a class="pull-right" style="margin-top: 25px;" href="index.php?p=user&flag=logout"><button class='btn btn-danger'>Logout</button></a></div>
                </div>
                <p>Here are all call request on your site <b class='text-success'>{$domain_name}</b></p>
                <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                {if !empty($call_requests)} 
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>User Phone Number</th>
                                    <th>Request Time (In Hours)</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $call_requests AS $key=>$requests}
                                    <tr>
                                        <td>{$requests.user_name}</td>
                                        <td>{$requests.user_email}</td>
                                        <td>{$requests.user_number}</td>
                                        <td>{$requests.time} Hours ago</td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>
                {else}
                    <div class="row">
                        <div class="col-md-6">                        
                            <div class="alert alert-warning">
                                <strong>Warning!! </strong> There is no call requests registered on your site.
                            </div>
                        </div>
                    </div>
                {/if}
            </div>
        </div>
    </div>
{include file='footer.tpl'}