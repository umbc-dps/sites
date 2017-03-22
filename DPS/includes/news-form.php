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
            <td><label for="phone">Phone Number:*</label></td>
            <td><input type="text" name="phone" id="phone"></td>
          </tr>

          <tr>
            <td><label for="status">I am a(n):</label></td>

            <td>
            <ul class="status">
              <li><input type="checkbox" name="status" value="Alumni"> Alumni</li>
              <li><input type="checkbox" name="status" value="Current Student"> Current Student</li>
              <li><input type="checkbox" name="status" value="Faculty/Staff Member"> Faculty/Staff Member</li>
            </ul>
            </td>
          </tr>
          

          <tr>
            <td><label for="program">Program:</label></td>

            <td>
            <select name="program" id="program">
              <option value="Biotechnology">Biotechnology</option>
              <option value="Cybersecurity">Cybersecurity</option>
              <option value="Engineering Management">Engineering Management</option>
              <option value="Geographic Information Systems">Geographic Information Systems</option>
              <option value="Health Information Technology">Health Information Technology</option>
              <option value="I/O Psychology">I/O Psychology</option>
              <option value="Instructional Systems Development">Instructional Systems Development</option>
              <option value="Systems Engineering">Systems Engineering</option>
              <option value="Technical Management">Technical Management</option>
              <option value="Shady Grove - History">Shady Grove - History</option>
              <option value="Shady Grove - Political Science">Shady Grove - Political Science</option>
              <option value="Shady Grove - Psychology">Shady Grove - Psychology</option>
              <option value="Shady Grove - Social Work">Shady Grove - Social Work</option>
			</select>
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
            </select>
            </td>
          </tr>
          
          <tr>
            <td><label for="graduation">Graduation Year</label></td>
            <td><input type="text" name="graduation" id="graduation"></td>
          </tr>
          
          <tr>
            <td class="story_td"><label for="story">Share Your Story <em>(Please include any links to stories, videos, etc.)</em></label></td>
            <td><textarea type="text" name="prepare" id="story"></textarea></td>
          </tr>

		  <tr>
            <td align="center" colspan="2">
            	<input type="submit" name="submit" value="Submit" style="width:100px; height:auto">
            </td>
          </tr>
        </table>  
        
        <br> 
		<br clear="all">