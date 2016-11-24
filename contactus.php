<div class="white_color">
    <div class="cubody">
        <div class="serleftblock">    
                <div class="serblank"></div>                
                <div class="serblank"></div>
                <div class="cu_title">
                    <h2>Contact&nbsp;Us</h2>
                </div>
        </div>
        <div class="cumain">
            <form action="cusubmit.php" onsubmit="return validate()" method="post" name="cusubmit">
            <div class="left_cu">        
                <table class="table_cu">
                    <tbody>
                        <tr><td class="lcublock"><label for="first_name">First Name</label>&nbsp;<span class="star">*</span></td>
                            <td class="lcublock">
                                <input id="first_name" name="first_name" class="cuinput" type="text" placeholder=" Enter you first name"/><br>
                                <span id="errfn" class="error">Please Enter First Name</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="lcublock"><label for="last_name">Last Name</label>&nbsp;<span class="star">*</span></td>
                            <td class="lcublock">
                                <input id="last_name" name="last_name" class="cuinput" type="text"/><br>
                                <span id="errln" class="error">Please Enter Last Name</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="lcublock"><label for="company">Company</label>&nbsp;<span class="star">*</span></td>
                            <td class="lcublock">
                                <input id="company" name="company" class="cuinput" type="text"/><br>
                                <span id="errcmp" class="error">Please Enter Your Company Name</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="lcublock"><label for="email">Email</label>&nbsp;<span class="star">*</span></td>
                            <td class="lcublock">
                                <input id="email" name="email" class="cuinput" type="text" required="required"/><br>
                                <span id="erremail" class="error">Please Enter Your Email</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="lcublock"><label for="phone">Phone</label>&nbsp;<span class="star">*</span></td>
                            <td class="lcublock">
                                <input id="phone" name="phone" class="cuinput" type="tel"/><br>
                                <span id="errph" class="error">Please Enter Your Phone Number</span>
                            </td>
                        </tr>
                    </tbody>            
                </table>
            </div>
            <div class="right_cu">
            <table class="table_cu">
                <tbody>
                    <label>How can we help you?</label>
                </tbody>    
                <tbody>
                    <tr><td class="checkbox_row"><input id="rpo" name="" type="checkbox" /></td><td><label for="rpo">HR Services</label></td></tr>
                    <tr><td class="checkbox_row"><input id="operexel" name="operexel" type="checkbox" /></td><td class="checkbox_row"><label for="operexel">Business Insight Services</label></td></tr>
                    <tr><td class="checkbox_row"><input id="controlnc" name="controlnc" type="checkbox" /></td><td><label for="controlnc">Technology Services</label></td></tr>
                    <tr><td class="checkbox_row"><input id="bpre" name="bpre" type="checkbox" /></td><td><label for="bpre">Financial & Information Services</label></td></tr>                    
                </tbody>
                <tbody>
                    <tr>
                        <td class="lcublock"><label for="message">Message</label></td><td class="lcublock">
                            <textarea id="message" name="message" cols="41" rows="5"></textarea>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr><td><input type="submit" name="submit" value="Send"/></td></tr>
                </tbody>
            </table>
            </div>
            </form>
        </div>
    </div>
</div>
