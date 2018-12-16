
$(document).ready(function(){
	
	var modalTitle = ["HTML", "CSS", "Bootstrap", "Icons", "W3.CSS", "JavaScript", "JQuery", "JSON", "AJAX", "AngularJS", "SQL", "PHP", "ASP", "Web Templates"];
	
	var modalBody = ["HTML stands for Hypertext Markup Language, and it is the most widely used language to write Web Pages.Originally, HTML was developed with the intent of defining the structure of documents like headings, paragraphs, lists, and so forth to facilitate the sharing of scientific information between researchers.",
					 "CSS is used to control the style of a web document in a simple and easy way.CSS is the acronym for \"Cascading Style Sheet\". This tutorial covers both the versions CSS1,CSS2 and CSS3, and gives a complete understanding of CSS, starting from its basics to advanced concepts.",
					 "Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web. Designed for everyone, everywhere. Bootstrap makes front-end web development faster and easier. It's made for folks of all skill levels, devices of all shapes, and projects of all sizes.",
					 "Why use icons? Design is all about communication: it doesn\'t matter how important or exciting the information that you\'re sharing is if you fail to hook your visitors. When initially viewing a website, most users will first scan the page for visually interesting content, and only after something grabs their attention will they actually begin reading. Icons are a simple, effective way to draw users into the content of your website.", 
					 "Smaller and faster than other CSS frameworks.Easier to learn, and easier to use than other CSS frameworks.Uses standard CSS only (No jQuery or JavaScript library).Speeds up and simplifies web development.Supports modern responsive design (mobile first) by default.Provides CSS equality for all browsers. Chrome, Firefox, IE, Safari, and more.Provides CSS equality for all devices. PC, laptop, tablet, and mobile",
					 "Javascript is a programming language. Javascript was engineered at Sun Microsystems with the intention of creating a method of manipulating webpages on a user's computer, without the need for refreshing the page. The first web browser that supported JavaScript was Netscape 2.0B3. Internet Explorer has never supported valid Javascript, instead supporting a Microsoft version called JScript. JScript is over 99% compatible with Javascript, such that most people do not realize that it is not Javascript. The few compatibility issues that do arise are usually attributed to the fact that Microsoft products traditionally fall short of standards compliance.",
					 "What does jQuery mean?jQuery is a concise and fast JavaScript library that can be used to simplify event handling, HTML document traversing, Ajax interactions and animation for speedy website development. jQuery simplifies the HTML's client-side scripting, thus simplifying Web 2.0 applications development.jQuery is a free, open-source and dual-licensed library under the GNU General Public License. It is considered one of the favorite JavaScript (JS) libraries available today. As of 2012, it is used by more than half of the Web's top sites.",
					 "JSON (JavaScript Object Notation) is a lightweight data-interchange format. It is easy for humans to read and write. It is easy for machines to parse and generate. It is based on a subset of the JavaScript Programming Language, Standard ECMA-262 3rd Edition - December 1999. JSON is a text format that is completely language independent but uses conventions that are familiar to programmers of the C-family of languages, including C, C++, C#, Java, JavaScript, Perl, Python, and many others. These properties make JSON an ideal data-interchange language.",
					 "Ajax is a client-side script that communicates to and from a server/database without the need for a postback or a complete page refresh. The best definition I've read for Ajax is “the method of exchanging data with a server, and updating parts of a web page – without reloading the entire page.”",
					 "AngularJS is a structural framework for dynamic web apps. It lets you use HTML as your template language and lets you extend HTML's syntax to express your application's components clearly and succinctly. AngularJS's data binding and dependency injection eliminate much of the code you would otherwise have to write.",
					 "Structured Query Language (SQL) is a standard computer language for relational database management and data manipulation. SQL is used to query, insert, update and modify data. Infact this wesite is based on MySQL :)",
					 "PHP is a server-side scripting language designed primarily for web development but also used as a general-purpose programming language. ... PHP originally stood for Personal Home Page, but it now stands for the recursive acronym PHP: Hypertext Preprocessor.",
					 "It was developed by Microsoft to allow programmers to build dynamic web sites, web applications and web services. It was first released in January 2002 with version 1.0 of the .NET Framework, and is the successor to Microsoft's Active Server Pages (ASP) technology.",
					 "A website template (or web template) is a pre-designed webpage, or set of HTML webpages that anyone can use to \"plug-in\" their own text content and images into to create a website."];
					 
	var price = ["50", "50", "70", "20", "30", "100", "50", "80", "75", "65", "90", "150", "150", "250"];
	
	$("#forgot").click(function(){
		$("#forgotBox").fadeToggle();
	});
	$("#changePassword").click(function(){
		$("#changePasswordBox").fadeToggle();
	});
	$("#goToServiceButton").click(function(){
		window.location.replace("user_services.php");
	});
	$(".close, .submit-forgot").click(function(){
		$("#forgotBox, #changePasswordBox").fadeToggle();
	});
	
	for(var i = 0; i < $(".expandable").length; i++){
		$(".expandable").eq(i).click(function(){
			$(this).next().toggle(300);
		});
		$(".expandable").eq(i).hover(function(){
			$(this).parent().toggleClass("blackBorder");
			$(this).toggleClass("blackBorder");
		});
	}
	
	$(".card").hover(
		function(){
			$(this).toggleClass("animated pulse");
		}
	);
	$(".service").hover(
		function(){
			$(this).toggleClass("animated tada");
		}
	);
	
	$(window).click(function(e) {
		var forgotBox = document.getElementById("forgotBox");
		if(e.target == forgotBox)
			forgotBox.style.display = "none";
	});
	
	$(".panelCard").hover(
		function(){
			$(this).toggleClass("animated tada");
		}
	);
	$("#iconTray i").hover(function(){
		$(this).toggleClass("animated rubberBand");
	});
	
	for(var i = 0; i < $(".openModal").length; i++)
	{
		$(".openModal").eq(i).click(function(){
			$("#myModal").css("display","block");
		});
	}
	for(var i = 0; i < $(".openUserModal").length; i++)
	{
		$(".openUserModal").eq(i).click(function(){
			$("#myModal").css("display", "block");
			
			// Isme bhot mehnat lagi bc...
			var cardIndex = $(this).attr("cardIndex");
			$("#modalTitle").text(modalTitle[cardIndex]);
			$("#itemName").attr("value", modalTitle[cardIndex]);
			$("#modalBodyText").text(modalBody[cardIndex]);
			$("#price").text(price[cardIndex]);
			$("#itemPrice").attr("value", price[cardIndex]);
		});
	}
	
	$("#editProfile").click(function(){
		$("input").removeAttr("disabled");
		$("#saveButton").css("display", "block");
		$("#changePassword").css("display", "block");
		$("#editProfile").css("display", "none");
	});
	
	$("#closeButton").click(function(){
		$("#myModal").css("display", "none");
	});
});

