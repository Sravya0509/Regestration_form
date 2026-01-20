<!DOCTYPE html>
<html>
  <head>
    <title>Student Registration Form</title>
    <style>
      body { background-color: black; font-family: Arial, sans-serif; color: white; }
      form { background-color: #111; padding: 30px; border-radius: 20px; width: 600px; margin: 50px auto; }
      fieldset { border: 3px solid rgb(44, 118, 147); border-radius: 25px; padding: 30px; }
      legend { border: 2px solid skyblue; border-radius: 10px; padding: 10px; font-weight: 900; }
      table { width: 100%; border-collapse: collapse; }
      td { padding: 5px; vertical-align: top; }
      input, select, textarea { padding: 5px; }
      input[type="text"], input[type="email"], input[type="password"], select, textarea { width: 95%; }
      /* Horizontal layout for DOB */
      .dob input { width: 50px; display: inline-block; margin-right: 5px; }
      /* Horizontal layout for radio buttons */
      .gender input { margin-right: 5px; }
      .gender label { margin-right: 15px; }
      /* Horizontal layout for checkboxes */
      .dept input { margin-right: 5px; }
      .dept label { margin-right: 10px; }
      button { background-color: yellow; color: #3d0707; font-weight: bold; padding: 8px 20px; border: none; border-radius: 5px; cursor: pointer; }
    </style>
  </head>
  <body>
    <form action="connect.php" method="post">
      <fieldset>
        <legend>Student Information</legend>
        <table>
          <tr><td>Roll No:</td><td><input type="text" name="rollno" required /></td></tr>
          <tr><td>First Name:</td><td><input type="text" name="firstname" required /></td></tr>
          <tr><td>Last Name:</td><td><input type="text" name="lastname" required /></td></tr>
          <tr><td>Father's Name:</td><td><input type="text" name="fathersname" required /></td></tr>
          <tr>
            <td>Date of Birth:</td>
            <td class="dob">
              <input type="text" name="day" placeholder="DD" required /> -
              <input type="text" name="month" placeholder="MM" required /> -
              <input type="text" name="year" placeholder="YYYY" required />
            </td>
          </tr>
          <tr><td>Email:</td><td><input type="email" name="email" required /></td></tr>
          <tr><td>Password:</td><td><input type="password" name="password" required /></td></tr>
          <tr>
            <td>Gender:</td>
            <td class="gender">
              <label><input type="radio" name="gender" value="Male" required /> Male</label>
              <label><input type="radio" name="gender" value="Female" required /> Female</label>
            </td>
          </tr>
          <tr>
            <td>Department:</td>
            <td class="dept">
              <label><input type="checkbox" name="dept[]" value="CSE" /> CSE</label>
              <label><input type="checkbox" name="dept[]" value="ECE" /> ECE</label>
              <label><input type="checkbox" name="dept[]" value="EEE" /> EEE</label>
              <label><input type="checkbox" name="dept[]" value="AIDS" /> AIDS</label>
              <label><input type="checkbox" name="dept[]" value="Mech" /> Mech</label>
              <label><input type="checkbox" name="dept[]" value="Civil" /> Civil</label>
            </td>
          </tr>
          <tr>
            <td>Course:</td>
            <td>
              <select name="course" required>
                <option value="">-- Select Course --</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
                <option value="React">React</option>
                <option value="SQL">SQL</option>
              </select>
            </td>
          </tr>
          <tr><td>Address:</td><td><textarea name="address" rows="4" required></textarea></td></tr>
          <tr><td colspan="2" align="center"><button type="submit">Register</button></td></tr>
        </table>
      </fieldset>
    </form>
  </body>
</html>
