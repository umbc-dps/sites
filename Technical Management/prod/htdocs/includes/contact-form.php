<table border="0" id="contact">

          <tr>
            <th width="45%">
            </th>

            <th width="45%">
            </th>
          </tr>


          <tr>
            <td><label for="firstname">First Name:* </label></td>
            <td><input type="text" name="firstname" id="firstname" required></td>
          </tr>

          <tr>
            <td><label for="lastname">Last Name:*</label></td>
            <td><input type="text" name="lastname" id="lastname" required></td>
          </tr>

          <tr>
            <td><label for="email">Email Address:*</label></td>
            <td><input type="text" name="email" id="email" required></td>
          </tr>


          <tr id="address1">
            <td><label for="address">Home Address:</label></td>
            <td><input type="text" name="address" value=""  id="address"></td>
          </tr>


          <tr id="city1">
            <td><label for="city">City:</label></td>
            <td><input type="text" name="city"  id="city"></td>
          </tr>


          <tr id="state1">
            <td><label for="state">State:</label></td>

            <td><select name="state" id="state">
              <option value="AL">
                AL
              </option>

              <option value="AK">
                AK
              </option>

              <option value="AZ">
                AZ
              </option>

              <option value="AR">
                AR
              </option>

              <option value="CA">
                CA
              </option>

              <option value="CO">
                CO
              </option>

              <option value="CT">
                CT
              </option>

              <option value="DE">
                DE
              </option>

              <option value="DC">
                DC
              </option>

              <option value="FL">
                FL
              </option>


              <option value="GA">
                GA
              </option>

              <option value="HI">
                HI
              </option>

              <option value="ID">
                ID
              </option>

              <option value="IL">
                IL
              </option>

              <option value="IN">
                IN
              </option>

              <option value="IA">
                IA
              </option>

              <option value="KS">
                KS
              </option>

              <option value="KY">
                KY
              </option>

              <option value="LA">
                LA
              </option>

              <option value="ME">
                ME
              </option>

              <option selected value="MD">
                MD
              </option>

              <option value="MA">
                MA
              </option>

              <option value="MI">
                MI
              </option>

              <option value="MN">
                MN
              </option>

              <option value="MS">
                MS
              </option>

              <option value="MO">
                MO
              </option>

              <option value="MT">
                MT
              </option>

              <option value="NE">
                NE
              </option>

              <option value="NV">
                NV
              </option>

              <option value="NH">
                NH
              </option>

              <option value="NJ">
                NJ
              </option>

              <option value="NM">
                NM
              </option>

              <option value="NY">
                NY
              </option>

              <option value="NC">
                NC
              </option>

              <option value="ND">
                ND
              </option>

              <option value="OH">
                OH
              </option>

              <option value="OK">
                OK
              </option>

              <option value="OR">
                OR
              </option>

              <option value="PA">
                PA
              </option>

              <option value="RI">
                RI
              </option>

              <option value="SC">
                SC
              </option>

              <option value="SD">
                SD
              </option>

              <option value="TN">
                TN
              </option>

              <option value="TX">
                TX
              </option>

              <option value="UT">
                UT
              </option>

              <option value="VT">
                VT
              </option>

              <option value="VA">
                VA
              </option>

              <option value="WA">
                WA
              </option>

              <option value="WV">
                WV
              </option>

              <option value="WI">
                WI
              </option>

              <option value="WY">
                WY
              </option>
            </select>
            </td>
          </tr>


          <tr>
            <td><label for="zip">Postal Code:</label></td>
            <td><input type="text" name="zip" id="zip"></td>
          </tr>


          <tr>
            <td><label for="startdate">Anticipated start date:</label></td>

            <td valign="middle">
            <select name="startdate" id="startdate">
            <option value=""></option>
            <option value="Fall 2016">Fall 2016</option> 
            <option value="Spring 2017">Spring 2017</option> 
            <option value="Fall 2017">Fall 2017</option> 
            <option value="Spring 2018">Spring 2018</option> 
            <option value="Unknown">Unknown</option></select>
            </td>
          </tr>


          <tr>
            <td><label for="howyouheard">How did you hear about us:*</label></td>

            <td valign="middle">
            <select name="howyouheard" id="howyouheard">
            <option value=""></option>
            <option value="Email">Email</option> 
            <option value="Flyer/Poster">Flyer/Poster</option> 
            <option value="Friend/Associate">Friend/Associate</option> 
            <option value="Individual Visit">Individual Visit</option> 
            <option value="Internet Radio">Internet Radio</option> 
            <option value="Internet Search">Internet Search</option> 
            <option value="Publication">Publication</option> 
            <option value="Social Media Networks">Social Media Networks</option> 
            <option value="Transfer Day">Transfer Day</option></select>
            </td>
          </tr>


          <tr>
            <td>
            </td>
          </tr>


          <tr>
           <td><label for="program" hidden>Which Program are you interested in?:*</label></td>
           <td valign="middle">
           <select name="program" id="program" required hidden>
           <option value=""></option>
           <option value="Biotechnology (Main)" id="bio">Biotechnology (Catonsville)</option> 
           <option value="Biotechnology (Shady Grove)" id="bio-sg">Biotechnology (Shady Grove)</option> 
           <option value="Cybersecurity (Main)" id="cyber">Cybersecurity (Catonsville)</option> 
           <option value="Cybersecurity (Shady Grove)" id="cyber-sg">Cybersecurity (Shady Grove)</option> 
           <option value="Health Information Technology (Main)" id="hit">Health Information Technology</option> 
           <option value="Engineering Management (Main)" id="engm">Engineering Management</option> 
           <option value="Systems Engineering (Main)" id="se">Systems Engineering</option> 
           <option value="Geographic Information Systems (Main)" id="gis">Geographic Information Systems</option> 
           <option value="Industrial & Organizational Psychology (Main)" id="io">IO Psychology</option> 
           <option value="Instructional Systems Development (Main)" id="isd">ISD</option> 
           <option value="English Language Institute (Main)" id="eli">English Language Institute</option> 
           <option value="Music Entrepreneurship (Main)" id="music" class="music">Music Entrepreneurship</option> 
           <option value="Professional Training (Main)" id="pro">Professional Training</option> 
           <option value="Summer/Winter (Main)" id="sw">Summer and Winter Sessions</option> 
           <option value="Teaching English to Speakers of Other Languages (Main)" id="tesol">TESOL</option>
           <option value="Division of Professional Studies (Main)" id="dps">Division of Professional Studies</option>
           <option value="Nonprofit Sector (Main)" id="nonprofit">Nonprofit Sector</option>
           <option value="History (Shady Grove)" id="history">History (B.A.)</option>
           <option value="Political Science (Shady Grove)" id="poli">Political Science (B.A.)</option>
           <option value="Psychology (Shady Grove)" id="psych">Psychology (B.A.)</option>
           <option value="Social Work (Shady Grove)" id="social-work">Social Work (B.A.)</option>
           </select>
</td>
          </tr>
          
            <tr>
              <td><label for="type" hidden>What Type of Program?:*</label></td>
              <td>
              <select name="type" id="type" hidden>
                  <option value=""></option>
                  <option value="Master's" selected>Master's</option> 
                  <option value="Certificate">Certificate</option>
              </select>
              </td>
            </tr>

			<input type="text" name="programtitle" id="programtitle" >
            <input type="text" name="pc" id="pc" >
            <input type="text" name="cc" id="cc" >
            <input type="text" name="url" id="url" >
            <input type="text" name="pctitle" id="pctitle" >
            <input type="text" name="infosession" id="infosession" >
            <input type="text" name="programguide" id="programguide" >
            <input type="text" name="planningform" id="planningform" >
            <textarea name="body" id="body" ></textarea>
          	

           
            
          <tr>
            <td><label for="questions">Questions/Comments:</label></td>
          </tr>
          <tr>
            <td colspan="2">
            	<textarea name="questions" rows="3" id="questions" class="formtext2" style="width:100%;"></textarea>
            </td>
          </tr>
          
          <tr>
           <td colspan="2" align="center">
           <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
           <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>">
           </script>
           <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
           </td>
          </tr>

          <tr>
            <td align="center" colspan="2">
            	<input type="submit" name="submit" value="Submit" style="width:100px; height:auto">
            </td>
          </tr>