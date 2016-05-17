<!DOCTYPE html>
<html>

<head>
  <title>Custom Report</title>
  <link href="/css/site.css" rel="stylesheet">
</head>

<body>

<nav id="nav01"></nav>

<div id="main">
	<h1>Custom Report</h1>
	
	<div class="formtitle" style="margin-bottom: 20px">
		<span>Select or enter criteria value to generate custom report</span>
	</div>
	
	<form method="post" action="/search.php">
		<table class="cus-table-even">
			<tr class="cus-row">
				<td class="cus-data cus-data-main">STUDENT <input type="checkbox" name="student_check" value="student" ></td>
			</tr>
			
			<tr class="cus-row">
				<td class="cus-data">FirstName: <input type="text" name="fname"></td>
				<td class="cus-data">MiddleName: <input type="text" name="mname"></td> 
				<td class="cus-data">LastName: <input type="text" name="lname"></td> 
				<td class="cus-data">
				Gender: <select name="stu_gender">
					<option selected></option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					</select>
				</td>
			</tr>
			
			<tr class="cus-row">
				<td class="cus-data">
					Status: <select name="stu_status">
					<option selected></option>
					<option value="International">International</option>
					<option value="Permanent Resident/Citizen">Permanent Resident/Citizen</option>
					</select>
				</td>

				<td class="cus-data">
					Semester: <select name="stu_semester">
					<option selected></option>
					<option value="Fall">Fall</option>
					<option value="Winter">Winter</option>
					</select>
				</td>
				
				<td class="cus-data">
					Year: <input type="text" name="year">
				</td>
				
				<td class="cus-data">
					Intern Status:  <select name="stu_intern_status">
					<option selected></option>
					<option value="Hired">Hired</option>
					<option value="Available">Available</option>
					</select>
				</td>
			</tr>
		</table>
		
		<table class="cus-table-odd">
			<tr class="cus-row">
				<td class="cus-data cus-data-main">INTERN <input type="checkbox" name="intern_check" value="intern" ></td>
			</tr>
		</table>
			
		<table class="cus-table-even">
			<tr class="cus-row">
				<td class="cus-data cus-data-main">COMPANY <input type="checkbox" name="company_check" value="company" ></td>
			</tr>
			<tr class="cus-row">
				<td class="cus-data">Company Name: <input type="text" name="company_company_name"></td>
				<td class="cus-data">Company Type: <select name="company_company_type">
				<option selected></option>
				<option value="Company">Company</option>
				<option value="Startup Company">Startup Company</option>
				<option value="Research Project">Research Project</option>
				<option value="MAC Project">MAC Project</option>
				<option value="Other">Other</option>
				</select>
				</td>
			</tr>
				<tr class="cus-row">
				<td class="cus-data">City: <input type="text" name="company_city"></td>
				<td class="cus-data">Country: <input type="text" name="company_country"></td>
			</tr>
		</table>
			
		<table class="cus-table-odd">
			<tr class="cus-row">
				<td class="cus-data cus-data-main">JOB <input type="checkbox" name="job_check" value="job" ></td>
			</tr>
				<td class="cus-data">Job Name: <input type="text" name="job_job_name"></td>
				<td class="cus-data">Salary: <input type="text" name="salary1">-<input type="text" name="salary2"></td>
			</tr>
		</table>
		
		
		<table class="cus-table-even">
			<tr class="cus-row">
				<td class="cus-data cus-data-main">JOB GROUP <input type="checkbox" name="job_group_check" value="job_group" ></td>
			</tr>
				<td class="cus-data">Job Group: <select name="job_group">
					<option selected></option>
					<option value="Web Development">Web Development</option>
					<option value="Mobile Development">Mobile Development</option>
					<option value="System Development">Mobile Development</option>
					<option value="Technical Support">Technical Support</option>
					<option value="Networking">Networking</option>
					<option value="Data Analysis">Data Analysis</option>
					<option value="Tesing">Tesing</option>
					<option value="Security">Security</option>
					<option value="Data Management">Data Management</option>
					<option value="Other">Other</option>
					</select>
				</td>
			</tr>
		</table>
		
		<table class="cus-table-odd">
			<tr class="cus-row">
				<td class="cus-data cus-data-main">SKILL <input type="checkbox" name="skill_check" value="skill" ></td>
			</tr>
				<td class="cus-data">Skill Name: <input type="text" name="skill_name"></td>
				<td class="cus-data">
					Skill Level: <select name="skill_level">
					<option selected></option>
					<option value="Not at all competent">Not at all competent</option>
					<option value="Little competent">Little competent</option>
					<option value="Moderately competent">Moderately competent</option>
					<option value="Extremely competent">Extremely competent</option>
					</select>
				</td>
				<td class="cus-data">Skill Type: <select name="skill_type">
					<option selected></option>
					<option value="Technical">Technical</option>
					<option value="CMS">CMS</option>
					<option value="Operating Systems">Operating Systems</option>
					</select>
				</td>
			</tr>
		</table>
		
		<table class="cus-table-even">
			<tr class="cus-row">
				<td class="cus-data cus-data-main">CERTIFICATION <input type="checkbox" name="certification_check" value="certification" ></td>
			</tr>
				<td class="cus-data">Titles: <input type="text" name="cer_titles"></td>
				<td class="cus-data">Body: <input type="text" name="cer_body"></td>
			</tr>
		</table>
		
		<table class="cus-table-odd">
			<tr class="cus-row">
				<td class="cus-data cus-data-main">EDUCATION <input type="checkbox" name="education_check" value="education" ></td>
			</tr>
				<td class="cus-data">Type: <select name="edu_type">
					<option selected></option>
					<option value="Undergraduate">Undergraduate</option>
					<option value="Graduate">Graduate</option>
					</select>
				</td>
				<td class="cus-data">Major: <input type="text" name="major"></td>
				<td class="cus-data">GPA: <input type="text" name="gpa1">-<input type="text" name="gpa2"></td>
			</tr>
		</table>
		
		<table class="cus-table-even">
			<tr class="cus-row">
				<td class="cus-data cus-data-main">WORK EXPERIENCE <input type="checkbox" name="workexp_check" value="workexp" ></td>
			</tr>
				<td class="cus-data">Company Name: <input type="text" name="we_company_name"></td>
				<td class="cus-data">Position: <input type="text" name="we_position"></td>
			</tr>
		</table>
			
		<input class="data-submit-btn" style="margin-left: 100px" type="submit" value="Submit"/>
	</form>
	
  <div id="id01" style="overflow-x:auto; overflow-y:auto" class="table-data"></div>
  <footer id="foot01"></footer>
</div>

<script src="/scripts/script.js"></script>
<script src="/scripts/cus_report_layout.js"></script>


</body>
</html>