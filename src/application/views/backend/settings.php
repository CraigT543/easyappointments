<script type="text/javascript" 
        src="<?php echo $base_url; ?>assets/js/backend_settings.js"></script>
        
<script type="text/javascript">    
    var GlobalVariables = {
        'baseUrl': <?php echo '"' . $base_url . '"'; ?>,
        'userSlug': <?php echo '"' . $user_slug . '"'; ?>,
        'settings': {
            'system': <?php echo json_encode($system_settings); ?>,
            'user': <?php echo json_encode($user_settings); ?>
        }
    };
    
    $(document).ready(function() {
        BackendSettings.initialize(true);
    });
</script>

<div id="services-page" class="row-fluid">
    <ul class="nav nav-tabs">
        <li class="general-tab tab active"><a>General</a></li>
        <li class="business-logic-tab tab"><a>Business Logic</a></li>
        <li class="user-tab tab"><a>User</a></li>
    </ul>
    
    <?php 
        // -------------------------------------------------------------- 
        //        
        // GENERAL TAB 
        // 
        // --------------------------------------------------------------
    ?>
    <div id="general" class="tab-content">
        <form>
            <fieldset>
                <legend>
                    General Settings
                    <button class="save-settings btn btn-primary btn-mini">Save</button>
                </legend>
                
                <label for="company-name">Company Name *</label>
                <input type="text" id="company-name" data-field="company_name">
                <span class="help-block">Company name will be displayed everywhere on the system 
                    (required).</span>
                
                <br>
                
                <label for="company-email">Company Email *</label>
                <input type="text" id="company-email" data-field="company_email">
                <span class="help-block">This will be the company email address. It will be used 
                    as the sender and the reply address of the system emails (required).</span>
                
                <br>
                
                <label for="company-link">Company Link</label>
                <input type="text" id="company-link" data-field="company_link">
                <span class="help-block">Company link should point to the official website of 
                    the company (optional).</span>
            </fieldset>
        </form>
    </div>
    
    <?php 
        // -------------------------------------------------------------- 
        //        
        // BUSINESS LOGIC TAB 
        // 
        // --------------------------------------------------------------
    ?>
    <div id="business-logic" class="tab-content" style="display: none;">
        <form>
            <fieldset>
                <legend>
                    Business Logic
                    <button class="save-settings btn btn-primary btn-mini">Save</button>
                </legend>
                
                <h4>Working Plan</h4>
                <span class="help-block">
                    Mark below the days and hours that your company will accept appointments. 
                    You will be able to adjust appointments in non working hours but the customers
                    will not be able to book appointments by themselves in non working periods. 
                    <strong>This working plan will be the default for new provider records but 
                    you will be able to change each provider's plan seperatly by editing his 
                    record.</strong>
                </span>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>Start</th>
                            <th>End</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label class="checkbox"><input type="checkbox" id="monday" />Monday</label></td>
                            <td><input type="text" id="monday-start" /></td>
                            <td><input type="text" id="monday-end" /></td>
                        </tr>
                        <tr>
                            <td><label class="checkbox"><input type="checkbox" id="tuesday" />Tuesday</label></td>
                            <td><input type="text" id="tuesday-start" /></td>
                            <td><input type="text" id="tuesday-end" /></td>
                        </tr>
                        <tr>
                            <td><label class="checkbox"><input type="checkbox" id="wednesday" />Wednesday</label></td>
                            <td><input type="text" id="wednesday-start" /></td>
                            <td><input type="text" id="wednesday-end" /></td>
                        </tr>
                        <tr>
                            <td><label class="checkbox"><input type="checkbox" id="thursday" />Thursday</label></td>
                            <td><input type="text" id="thursday-start" /></td>
                            <td><input type="text" id="thursday-end" /></td>
                        </tr>
                        <tr>
                            <td><label class="checkbox"><input type="checkbox" id="friday" />Friday</label></td>
                            <td><input type="text" id="friday-start" /></td>
                            <td><input type="text" id="friday-end" /></td>
                        </tr>
                        <tr>
                            <td><label class="checkbox"><input type="checkbox" id="saturday" />Saturday</label></td>
                            <td><input type="text" id="saturday-start" /></td>
                            <td><input type="text" id="saturday-end" /></td>
                        </tr>
                        <tr>
                            <td><label class="checkbox"><input type="checkbox" id="sunday" />Sunday</label></td>
                            <td><input type="text" id="sunday-start" /></td>
                            <td><input type="text" id="sunday-end" /></td>
                        </tr>
                    </tbody>
                </table>
                
                <br>
                
                <h4>Breaks</h4>
                
                <span class="help-block">
                    Add the working breaks during each day. These breaks will be applied for 
                    all new providers. 
                </span>
                
                <div>
                    <button type="button" id="add-break" class="btn btn-primary">
                        <i class="icon-white icon-plus"></i>
                        Add
                    </button>
                    
                    <button type="button" id="edit-break" class="btn">
                        <i class="icon-edit"></i>
                        Edit
                    </button>
                    
                    <button type="button" id="remove-break" class="btn">
                        <i class="icon-remove"></i>
                        Delete
                    </button>
                </div>
                
                <br>
                
                <table id="breaks" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>Start</th>
                            <th>End</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </fieldset>
        </form>
    </div>
    
    <?php 
        // -------------------------------------------------------------- 
        //        
        // USER TAB 
        // 
        // --------------------------------------------------------------
    ?>
    <div id="user" class="tab-content" style="display: none;">
        <form class="row-fluid">
            <fieldset class="span5">
                <legend>
                    Personal Info 
                    <button class="save-settings btn btn-primary btn-mini">Save</button>
                </legend>
                
                <input type="hidden" id="user-id" />
                
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" class="span9" />
                
                <label for="last-name">Last Name *</label>
                <input type="text" id="last-name" class="span9" />
                
                <label for="email">Email *</label>
                <input type="text" id="email" class="span9" />
                
                <label for="mobile-number">Mobile Number</label>
                <input type="text" id="mobile-number" class="span9" />
                
                <label for="phone-number">Phone Number</label>
                <input type="text" id="phone-number" class="span9" />
                
                <label for="address">Address</label>
                <input type="text" id="address" class="span9" />
                
                <label for="city">City</label>
                <input type="text" id="city" class="span9" />
                
                <label for="state">State</label>
                <input type="text" id="state" class="span9" />
                
                <label for="zip-code">Zip Code</label>
                <input type="text" id="zip-code" class="span9" />
                
                <label for="notes">Notes</label>
                <textarea id="notes" class="span9"></textarea>
            </fieldset>
            
            <fieldset class="span5">
                <legend>Miscellaneous</legend>
                
                <label for="username">Username *</label>
                <input type="text" id="username" />
                
                <label for="password">Password *</label>
                <input type="text" id="password" />
                
                <label for="retype-password">Retype Password *</label>
                <input type="text" id="retype-password" />
                
                <br>
                
                <button type="button" class="btn" data-toggle="button">
                    <i class="icon-asterisk"></i>
                    Receive Email Notifications
                </button>
            </fieldset>
        </form>
    </div>
    
</div>