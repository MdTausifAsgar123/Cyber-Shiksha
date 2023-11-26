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
			<h2>Java Programming</h2>
			<ul>
				<li>
					<h4>
					Java Tutorial
Java Training
Our core Java programming tutorial is designed for students and working professionals. Java is an object-oriented, class-based, concurrent, secured and general-purpose computer-programming language. It is a widely used robust technology.

What is Java?
Java is a programming language and a platform. Java is a high level, robust, object-oriented and secure programming language.

Java was developed by Sun Microsystems (which is now the subsidiary of Oracle) in the year 1995. James Gosling is known as the father of Java. Before Java, its name was Oak. Since Oak was already a registered company, so James Gosling and his team changed the name from Oak to Java.

Platform: Any hardware or software environment in which a program runs, is known as a platform. Since Java has a runtime environment (JRE) and API, it is called a platform.
Play

Next
Unmute
Current TimeÂ 
0:00
/
DurationÂ 
18:10
Â 
Fullscreen

Backward Skip 10s

Play Video

Forward Skip 10s
-------------------------------
Java Example
Let's have a quick look at Java programming example. A detailed description of Hello Java example is available in next page.

Simple.java

class Simple{  
    public static void main(String args[]){  
     System.out.println("Hello Java");  
    }  
}  
--------------------------------
Test it Now
Application
According to Sun, 3 billion devices run Java. There are many devices where Java is currently used. Some of them are as follows:

Desktop Applications such as acrobat reader, media player, antivirus, etc.
Web Applications such as irctc.co.in, javatpoint.com, etc.
Enterprise Applications such as banking applications.
Mobile
Embedded System
Smart Card
Robotics
Games, etc.
Types of Java Applications
There are mainly 4 types of applications that can be created using Java programming:

1) Standalone Application
Standalone applications are also known as desktop applications or window-based applications. These are traditional software that we need to install on every machine. Examples of standalone application are Media player, antivirus, etc. AWT and Swing are used in Java for creating standalone applications.

2) Web Application
An application that runs on the server side and creates a dynamic page is called a web application. Currently, Servlet, JSP, Struts, Spring, Hibernate, JSF, etc. technologies are used for creating web applications in Java.

3) Enterprise Application
An application that is distributed in nature, such as banking applications, etc. is called an enterprise application. It has advantages like high-level security, load balancing, and clustering. In Java, EJB is used for creating enterprise applications.

4) Mobile Application
An application which is created for mobile devices is called a mobile application. Currently, Android and Java ME are used for creating mobile applications.

Java Platforms / Editions
There are 4 platforms or editions of Java:

1) Java SE (Java Standard Edition)
It is a Java programming platform. It includes Java programming APIs such as java.lang, java.io, java.net, java.util, java.sql, java.math etc. It includes core topics like OOPs, String, Regex, Exception, Inner classes, Multithreading, I/O Stream, Networking, AWT, Swing, Reflection, Collection, etc.

2) Java EE (Java Enterprise Edition)
It is an enterprise platform that is mainly used to develop web and enterprise applications. It is built on top of the Java SE platform. It includes topics like Servlet, JSP, Web Services, EJB, JPA, etc.

3) Java ME (Java Micro Edition)
It is a micro platform that is dedicated to mobile applications.

4) JavaFX
It is used to develop rich internet applications. It uses a lightweight user interface API.
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
