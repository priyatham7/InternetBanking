        <form action="alter_staff.php" method="POST">
            <table align="center" >
                <input type="hidden" name="current_id" value="<?php echo $id;?>"/>
                <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Edit Staff Details</u></h3></td></tr>
                <tr>
                    <td>Staff's name</td>
                    <td><input type="text" name="edit_name" value="<?php echo $rws[1];?>" required=""/></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        M<input type="radio" name="edit_gender" value="M" <?php if($rws[2]=="M") echo "checked";?>/>
                        F<input type="radio" name="edit_gender" value="F" <?php if($rws[2]=="F") echo "checked";?>/>
                    </td>
                </tr>
                <tr>
                    <td>
                        DOB
                    </td>
                    <td>
                        <input type="date" name="edit_dob" value="<?php echo $rws[3];?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea name="edit_address"><?php echo $rws[4];?></textarea></td>
                </tr>
                
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        <input type="text" name="edit_uname" value="<?php echo $rws[5];?>"/>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="edit_pwd" value="<?php echo $rws[6];?>"/>
                    </td>
                </tr>
                
                    <td>Mobile</td>
                    <td><input type="text" name="edit_mobile" value="<?php echo $rws[7];?>" required=""/></td>
                </tr>

                <tr>
                    <td>Email id</td>
                    <td><input type="text" name="edit_email" value="<?php echo $rws[8];?>" required=""/></td>
                </tr>
                
                <tr>
                    <td colspan="2" align='center' style='padding-top:20px'><input type="submit" name="alter" value="UPDATE DATA" class='addstaff_button'/></td>
                </tr>
            </table>
        </form>
        
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

        <div class='content_addstaff'>
                <div class='addstaff'>
                <form action="alter_customer.php" method="POST">
            <table align="center">
                                <input type="hidden" name="current_id" value="<?php echo $id;?>"/>
                 <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Edit Customer Details</u></h3></td></tr>
                <tr>
                    <td>customer's name</td>
                    <td><input type="text" name="edit_name" value="<?php echo $rws[1];?>" required=""/></td>
                </tr>
                <tr>
                    <td>pincode</td>
                    <td>
                         <input type="text" name="pincode" value="<?php echo $rws[5];?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        DOB
                    </td>
                    <td>
                        <input type="date" name="edit_dob" value="<?php echo $rws[6];?>"/>
                    </td>
                </tr>
                <tr>
                    <td>HNO</td>
                    <td><input type="text" name="hno" value="<?php echo $rws[2];?>" required=""/></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>
                        <input type="text" name="city" value="<?php echo $rws[4];?>" required=""/>
                    </td>
                </tr>
                
                                
                <tr>
                    <td>Street:</td>
                    <td><input type="text" name="street" value="<?php echo $rws[3];?>" required=""/></td>
                </tr>
                
                    <td>mobile</td>
                    <td><input type="text" name="edit_mobile" value="<?php echo $rws[7];?>" required=""/></td>
                </tr>

                <tr>
                    <td>email id</td>
                    <td><input type="text" name="emails" value="<?php echo $rws[8];?>" required=""/></td>
                </tr>
                
                <tr>
                    <td colspan="2" align='center' style='padding-top:20px'><input type="submit" name="alter_customer" value="UPDATE DATA" class='addstaff_button'/></td>
                </tr>
            </table>
        </form>
                
        </div>
        </div>
        		
		