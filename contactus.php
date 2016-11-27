<div class="white_color">
    
        <div class="serleftblock">    
                <div class="serblank"></div>                
                <div class="serblank"></div>
                <div class="cu_title">
                    <h2>Contact&nbsp;Us</h2>
                </div>
        </div>
        
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
                    <label>How can we help you?</label>&nbsp;<span id="errchbx" class="error">Please select one of the services</span>
                </tbody>    
                <tbody>
                    <tr><td class="checkbox_row"><input id="rpo" name="rpo" type="checkbox" value="HR Services" /></td><td><label for="rpo">HR Services</label></td></tr>
                    <tr><td class="checkbox_row"><input id="bis" name="bis" type="checkbox" value="Business Insight Services" /></td><td class="checkbox_row"><label for="bis">Business Insight Services</label></td></tr>
                    <tr><td class="checkbox_row"><input id="techs" name="techs" type="checkbox" value="Technology Services" /></td><td><label for="techs">Technology Services</label></td></tr>
                    <tr><td class="checkbox_row"><input id="fis" name="fis" type="checkbox" value="Financial & Information Services" /></td><td><label for="fis">Financial & Information Services</label></td></tr>                    
                </tbody>
                <tbody>
                    <tr>
                        <td class="lcublock"><label for="message">Message</label></td><td class="lcublock">
                            <textarea id="message" name="message" cols="41" rows="5"></textarea>
                            <span id="errmsg" class="error">Please enter your message with minimum 10 and maximum 250 words</span>
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
