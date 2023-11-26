<!DOCTYPE html>
<html lang="en">
<head>
	<!-- html2pdf CDN-->
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
	</script>

	<style>
		.container {
			position: fixed;
			top: 20%;
			left: 28%;
			margin-top: -65px;
			margin-left: -100px;
			border-radius: 7px;
		}

		.card {
			box-sizing: content-box;
			width: 700px;
			height: 1000px;
			padding: 30px;
			border: 1px solid black;
			font-style: sans-serif;
			background-color: #f0f0f0;
		}

		#button {
			background-color: #4caf50;
			border-radius: 5px;
			margin-left: 650px;
			margin-bottom: 5px;
			color: white;
		}

		h2 {
			text-align: center;
			color: #24650b;
		}
	</style>
</head>

<body>
	<div class="container">
	<a href="indexHome.php"class="active"><font color="red"><b>Home</b></font></a>
		<button id="button">Generate PDF</button>
		<div class="card" id="makepdf">
			<h2>What is Cyber-Shiksha</h2>
			<ul>
				<li>
					<h4>
						Cyber Security Training Program is the flagship program under CyberShikshaa. 
						It is a four-month, full-time program that trains women engineering graduates from tier-II, 
						tier-III cities, and rural areas in the field of Cyber Security. It covers various modules such as cryptography, 
						network security, web and application security, cyber forensics, security auditing, etc.
						In phase 1, 800+ candidates from 90+ cities/districts spread across 22 states/UTs of India have completed this training program with a placement rate of 60%. 
						Candidates have been placed successfully in global corporations, large technology services firms, start-ups and law enforcement agencies. 
						A strong corpus of 80+ recruiters from across the tech industry have hired and trained students for different roles.
					</h4>
				</li>
				<li>
					<h4>
					DSCI in partnership with Microsoft and in support with Information Security 
					Education and Awareness (ISEA) of Ministry of Electronics & IT (MeitY) launched CyberShikshaa in September 2018.
The CyberShikshaa flagship program 'Cyber Security Training Program' trains women engineering 
graduates from tier-II, tier-III cities and rural areas in the niche field of Cyber Security. C-DAC, 
NIELIT and our other premier training partners conduct the online/offline training sessions.
In 2021, after a successful run of the initial Cyber Security Training Program, 'Privacy Module 
for Women on Break' was rolled out for women professionals who are on career break due to medical, 
personal or any other reasons and want to make a career in Data Privacy. This is a pioneer 
credentialing program which equips women professionals with necessary skills to advance 
their careers in the growing field of Data Privacy.Both CyberShikshaa programs entail placement 
assistance for the candidates. Additionally, a self-learning 'CyberShikshaa Fundamentals' program 
was also launched to introduce cyber security concepts to college students.
					</h4>
				</li>
			</ul>
		</div>
	</div>
</body>

<script>
	let button = document.getElementById("button");
	let makepdf = document.getElementById("makepdf");

	button.addEventListener("click", function () {
		let mywindow = window.open("", "PRINT",
				"height=400,width=600");

		mywindow.document.write(makepdf.innerHTML);

		mywindow.document.close();
		mywindow.focus();

		mywindow.print();
		mywindow.close();

		return true;
	});
</script>
</html>
