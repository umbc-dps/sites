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


          <tr>
            <td><label for="phone">Phone Number:</label></td>
            <td><input type="text" name="phone" value=""  id="phone"></td>
          </tr>
          

          <tr>
            <td><label for="program">Program:</label></td>

            <td>
            <ul class="program">
              <li><input type="checkbox" name="program" value="Biotechnology"> Biotechnology</li>
              <li><input type="checkbox" name="program" value="Cybersecurity"> Cybersecurity</li>
              <li><input type="checkbox" name="program" value="Engineering Management"> Engineering Management</li>
              <li><input type="checkbox" name="program" value="Geographic Information Systems"> Geographic Information Systems</li>
              <li><input type="checkbox" name="program" value="Health Information Technology"> Health Information Technology</li>
              <li><input type="checkbox" name="program" value="I/O Psychology"> I/O Psychology</li>
              <li><input type="checkbox" name="program" value="Instructional Systems Development"> Instructional Systems Development</li>
              <li><input type="checkbox" name="program" value="Systems Engineering"> Systems Engineering</li>
            </ul>
            </td>
          </tr>


          <tr>
            <td><label for="campus">Campus:</label></td>

            <td valign="middle">
            <select name="campus" id="campus">
            <option value=""></option>
            <option value="Main Campus (Catonsville)">Main Campus (Catonsville)</option> 
            <option value="Shady Grove (Rockville)">Shady Grove (Rockville)</option> 
            <option value="Online">Online</option>
            </td>
          </tr>
          
          <tr>
            <td><label for="graduation">Graduation Year</label></td>
            <td><input type="text" name="graduation" id="graduation"></td>
          </tr>


          <tr>
            <td><label for="contribute">How would you like to contribute to Professional Programs?</label></td>

            <td>
            <ul class="contribute">
              <li><input type="checkbox" name="contribute" value="Video Testimonials"> Video Testimonials</li>
              <li><input type="checkbox" name="contribute" value="Record an Interview"> Record an Interview</li>
              <li><input type="checkbox" name="contribute" value="Send us an Email Testimonial"> Send us an Email Testimonial</li>
              <li>Other: <input type="text" name="contribute" value="" class="other"></li>
            </ul>
            </td>
          </tr>
          
          <tr>
            <td><label for="prepare">How did your degree program prepare you for life after UMBC?</label></td>
            <td><input type="text" name="prepare" id="prepare"></td>
          </tr>

		  <tr>
            <td><label for="additional">Any additional thoughts you would like to share?</label></td>
            <td><input type="text" name="additional" id="additional"></td>
          </tr>
          
         <tr>
            <td align="center" colspan="2">
            	<input type="submit" name="submit" value="Submit" style="width:100px; height:auto">
            </td>
          </tr>

        </table>  