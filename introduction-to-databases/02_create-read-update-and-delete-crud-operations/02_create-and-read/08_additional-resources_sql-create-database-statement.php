<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/sql.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
	<!-- InstanceBeginEditable name="doctitle" -->
    <title>SQL CREATE DATABASE Statement - Tutorial Republic</title>
    <!-- InstanceEndEditable -->
    	<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="fb:admins" content="100001054961582" />
<meta property="fb:app_id" content="1404574483159557" />
<meta property="og:image" content="/lib/images/signature.png" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />
<style>
html,body,h1,h2,h3,h4,h5,h6,p,blockquote,pre,img{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}
html,body{min-height:100%}
p{margin:0 0 12px}
ol,ul{margin:0 0 12px}
a,a:active,a:visited{outline:none;color:#1db79f;text-decoration:none}
a img{border:none;outline:none}
p code,table td:last-child code,.content ul li code,code.mark{padding:2px 4px;color:#333;background-color:#f1f1f1;border-radius:4px}
a code{color:inherit;background:none;padding:0}
table{border-collapse:collapse;border-spacing:0}
table td{vertical-align:top}
body{min-width:1300px;color:#414141;background:#fafafa;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI","Helvetica Neue",sans-serif;font-size:17px;line-height:1.7}
input,select,textarea,button,div,span,a{box-sizing:border-box}
h1,h2,h3,h4{color:#262626;margin:20px 0 10px;line-height:1.5;font-weight:600}
h1{font-size:34px;margin-top:17px}
h2{font-size:28px}
h3{font-size:22px}
.space{margin-bottom:25px!important}
.break{margin-bottom:15px!important}
.text-center{text-align:center!important}
.scroll{height:195px;overflow-y:scroll}
.scroll.large{height:245px}
.scroll.xlarge{height:290px}
.scroll.xxlarge{height:340px}
sup{font-size:13px}
h1 sup{background:#ec0000;border-radius:3px;padding:5px 10px;font-size:15px;color:#fff;position:relative;top:5px}
.leaderboard{padding-top:14px;position:relative;height:105px;overflow:hidden}
.intro-image img{display:block;padding:10px 0 25px;max-width:100%}
.clearfix::after{content:".";display:block;height:0;clear:both;visibility:hidden}
code,.code,.syntax,.green-box,.sky-box,.gray-box,.pink-box,.red-box,.at-rule,.codebox pre,.console-output,.command{font-size:16px;font-family:Consolas,Monaco,Courier,monospace}
.console-output{margin:15px 0}
.command{background:#f2f2f2;padding:16px 18px;margin:15px 0 25px;border-radius:3px}
hr{border:none;border-bottom:1px solid #e7e9ed;height:1px;margin:30px 0}
.summary,.topic{border:1px solid #eaeaea;border-width:1px 0;margin:20px 0;padding:10px 0;color:#8e9aa6;line-height:1.5}
h2.section-title span{display:inline-block;border-bottom:4px solid #c9d7e0;padding:0 50px 12px 0}
.wrapper{width:1300px;padding:0 15px;margin:0 auto}
.header{background:#23384e;padding:16px 0}
input.search{background:#fff;border:0 none;color:#807E7E;float:left;height:38px;line-height:26px;font-size:14px;margin:0 0 0 12px;outline:medium none;padding:6px 14px;width:500px;border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.6);font-family:inherit}
.search-btn{color:rgba(0,0,0,.6);background:#ebebeb;border:none;outline:none;cursor:pointer;float:left;height:38px;line-height:46px;width:44px;display:block;margin-left:-2px;border-radius:0 2px 2px 0;box-shadow:0 0 1px rgba(0,0,0,0.7)}
.logo{width:304px}
.logo img{height:44px;margin:-3px 0;display:block}
.site-search{float:left;margin-left:100px}
.menu{background-color:#f5f5f5;box-shadow:0 1px 1px rgba(0,0,0,.15);position:relative;z-index:9}
.menu a{color:#666;display:inline-block;padding:0 10px;text-decoration:none;font-size:14px;font-weight:600;height:48px;line-height:48px}
.menu a:first-child{margin-left:-10px}
.menu a.tool-link{float:right;display:block;border-radius:30px;line-height:28px;position:relative;height:auto;top:9px;padding:0 12px;color:#1ebba3;border:1px double #1ebba3}
.fl,.logo{float:left}
.leftcolumn{width:240px;float:left;font-size:16px;color:#4f4f4f}
.centercolumn{width:850px;float:left}
.rightcolumn{width:180px;float:left}
.content{background:#fff;padding:15px 40px 20px;border:1px solid #dedede;border-top:none;border-radius:1px}
.sidebar{width:160px;float:left;padding-top:28px;margin-left:20px;position:relative}
.leftcolumn .segment{margin:16px 0 12px;position:relative;font-size:18px;font-weight:600;line-height:normal}
.leftcolumn a{color:#4f4f4f;font-size:16px;line-height:26px;display:block;border-bottom:1px solid transparent}
.leftcolumn ul{list-style:none;padding:0;margin:0}
.segment,.chapters,.chapters a{float:left;clear:both}
h1 code,h2 code,h3 code{font:inherit}
.color-box{margin:15px 0;padding-left:20px}
.note-box,.warning-box,.tip-box{padding:8px 8px 3px 26px}
.info-tab{float:left;margin-left:-23px}
.content ul li{margin-top:7px}
.extra{padding-top:5px}
.green-box,.sky-box,.gray-box,.red-box,.pink-box{color:#000;margin-top:15px;padding:10px;background-color:#f6f8fa;border:1px solid #d7e2ec}
.example{background:#f4f5f6;padding:3px;margin:15px 0}
.codebox{background:#fff;border:1px solid #ddd}
.codebox-title{height:41px;padding-left:12px;border-bottom:1px solid #ddd;background:#f5f5f5}
.codebox-title h4{margin:0;font-size:18px;line-height:40px;float:left;font-weight:600}
a.try-btn,a.download-btn{width:140px;height:40px;color:#333;font-size:15px;line-height:41px;font-weight:600;text-align:center;text-decoration:none;float:right;display:block;border-left:1px solid #ddd;background:rgba(27,31,35,0.08);box-sizing:border-box;font-family:Arial,sans-serif}
a.try-btn span{font-size:18px;line-height:normal}
.hide,.code-style,.box-size,.bottom-link,.footer,.code-style,.snippets,.report-error,.badge,.social,.ad-label,.mobile-only,ul.tree-menu li ul{display:none}
.skyscraper{width:160px;height:600px;overflow:hidden;margin-bottom:20px;background:#ebecf0}
.bottom-ad{margin-top:46px;padding:24px;position:relative;background:url(/lib/images/smooth-line.png) no-repeat center #f9f9f9}
.rectangle-left,.rectangle-right{min-width:336px;min-height:280px;overflow:hidden}
.fr,a.previous-page,a.next-page,.rectangle-right,.topic-nav{float:right}
a.previous-page,a.next-page{width:32px;height:32px;line-height:30px}
.shadow{background:#F7F8F9;padding:3px;margin:10px 0}
.syntax{color:#2f4959;padding:13px 18px;background:#F9F9FA;border:1px solid #ddd;font-size:15px}
code[class*="language-"],pre[class*="language-"]{color:#000;background:none;font-family:Consolas,Monaco,'Andale Mono','Ubuntu Mono',monospace;text-align:left;white-space:pre;word-break:normal;word-wrap:normal;line-height:1.5;tab-size:4;hyphens:none}
pre[class*="language-"]{position:relative;margin:.5em 0;overflow:visible;padding:0}
pre[class*="language-"]>code{position:relative;border-left:10px solid #358ccb;box-shadow:-1px 0 0 0 #358ccb,0 0 0 1px #dfdfdf;background-color:#fdfdfd;background-image:linear-gradient(transparent 50%,rgba(69,142,209,0.04) 50%);background-size:3em 3em;background-origin:content-box;background-attachment:local}
code[class*="language"]{max-height:inherit;height:inherit;padding:0 1em;display:block;overflow:auto}
:not(pre) > code[class*="language-"]{position:relative;padding:.2em;border-radius:.3em;color:#c92c2c;border:1px solid rgba(0,0,0,0.1);display:inline;white-space:normal}
pre[class*="language-"].line-numbers{padding-left:0}
pre[class*="language-"].line-numbers code{padding-left:3.8em}
pre[class*="language-"].line-numbers .line-numbers-rows{left:0}
pre[class*="language-"][data-line]{padding-top:0;padding-bottom:0;padding-left:0}
pre[data-line] code{position:relative;padding-left:4em}
pre .line-highlight{margin-top:0}
pre.line-numbers{position:relative;padding-left:3.8em;counter-reset:linenumber;white-space:pre-wrap!important}
pre.line-numbers > code{position:relative;white-space:inherit}
.line-numbers-rows,.codebox pre.inactive{display:none}
.codebox pre.syntax-highlighter{margin:0;padding:0;overflow:auto}
pre.line-numbers .line-numbers-rows{border-right:3px solid #6CE26C}
.codebox pre.syntax-highlighter > code{box-shadow:none!important;padding-left:3.8em;background-image:linear-gradient(transparent 50%,#F8F8F8 50%);font-family:Consolas,Monaco,'Andale Mono','Ubuntu Mono',monospace!important;font-size:16px;line-height:1.5;overflow-wrap:break-word}
.codebox pre.syntax-highlighter,.codebox pre.syntax-highlighter code{border:none;width:100%;box-sizing:border-box}
pre.line-numbers code,pre.line-numbers .line-numbers-rows{padding-top:2px;padding-bottom:2px}
.preview-box{padding:15px;text-align:center;cursor:pointer;overflow:hidden;background:#FFF;border:1px solid #e6e6e6}
.preview-box a,.preview-box img{display:block;margin:0 auto}
.download-box{text-align:center;padding:20px 0;margin:20px 0 10px}
.output-box{border-color:#d4d4d4;border-style:solid;border-width:1px 0;padding:5px 15px;overflow:hidden;background:#fff;margin:10px 0}
.demo-box{margin-top:15px}
.subhead{border-bottom:3px solid #DCE3EB;margin-bottom:15px;padding-bottom:10px}
table.data,table.description{width:100%;font-size:92%}
table.data th{color:#000;padding:8px 7px;text-align:left;font-size:15px;background:#F8F8F8}
table.data td{color:#484848;padding:5px 7px;background:#fff}
table.data th,table.data td{vertical-align:top;border:1px solid #DCE3EB}
table.data tr.section th,table.data td.section{font-size:15px;background:#f0f4f7}
table.description th{width:150px}
table.no-wrap tr td:first-child{white-space:nowrap}
.topic-nav{padding-right:5px;color:#d0d0d0}
.topic-nav a{padding:0 15px;margin:0 0 0 5px;position:relative;display:inline-block}
.topic-nav a::after{font-size:24px;position:absolute;line-height:22px}
.topic-nav a:first-child{margin:0 5px 0 0}
.topic-nav a:first-child::after{content:'\00AB';left:-5px}
.topic-nav a:last-child::after{content:'\00BB';right:-5px}
@media screen and (max-width: 1280px) {
body{min-width:1260px}
.wrapper{width:1260px}
.leftcolumn{width:230px}
.centercolumn{width:820px}
.preview-box img{max-width:100%;height:auto}
}
@media screen and (max-width: 800px) {
body{min-width:100%;max-width:100%;padding-top:46px}
.wrapper{width:100%;padding:0}
.header{height:46px;padding:5px 0;position:fixed;top:0;left:0;right:0;width:100%;z-index:99}
.logo{width:auto;display:block;padding:6px 0 0 60px;position:absolute;left:0;z-index:100}
.logo img{height:30px}
.menu{width:100%;padding-left:12px;padding-right:12px;overflow-x:auto;white-space:nowrap}
.centercolumn{width:100%;float:none}
.content{padding:10px;border-width:0 0 1px 0}
.content img{max-width:100%;height:auto}
.skyscraper{display:inline-block}
.shadow,.example,.console-output,.content pre{max-width:100%;overflow-x:auto}
.codebox-title{position:relative}
.codebox.multi-style-mode pre{padding-top:7px;margin-top:36px;border-top:1px solid #ddd}
.bottom-ad{height:auto;background:none;padding:30px 0 0;margin:40px 0 0;text-align:center;position:relative}
.rectangle-left,.rectangle-right{float:none;display:inline-block;margin:10px auto;background:#EDEEF2}
.leftcolumn,.footer,.social,.site-search,.code-style,.menu a.tool-link,.backdrop{display:none}
.summary,.topic{padding:5px 0;margin:10px 0}
.leftcolumn,.centercolumn,.rightcolumn,.sidebar{float:none}
.header,.menu,.centercolumn,.footer,.appeal-text{width:100%}
a.try-btn,a.download-btn{width:130px}
.native-unit{margin-bottom:30px}
.rightcolumn,.sidebar{margin: 25px auto 0}
.overview{padding-right:0}
.scroll-pane{overflow-x:auto}
table.data{min-width:480px}
table.data pre{display:inline;white-space:normal}
table tr th,table tr td{width:auto!important}
.preview-box{padding:6px}
.leaderboard{margin:20px 0}
h1{font-size:30px}
h2{font-size:24px}
h3{font-size:20px}
.codebox pre.syntax-highlighter{overflow-x:auto}
.codebox pre.syntax-highlighter > code{min-width:614px;height:auto;overflow-x:hidden}
}
@media screen and (min-width: 801px) {
.site-search,.leftcolumn,.social{display:block!important}
.backdrop{display:none!important}
.hide-scroll{overflow-x:hidden!important}
}
.menu a.old-version{height:21px;font-size:13px;line-height:17px;border:1px double;border-radius:40px;margin-right:10px}</style>
    
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
    
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-381VQH4NHT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-381VQH4NHT');
</script></head>
<body>
    <!--Header-->
    
<div class="header">
    <div class="wrapper clearfix">
        <button type="button" class="open-menu mobile-only"><i class="icon-menu"></i></button>
        <div class="logo">
            <a href="https://www.tutorialrepublic.com/"><img src="/lib/images/logo.svg" alt="TutorialRepublic" /></a>
        </div>
        <div class="site-search">
            <form action="https://www.google.com/search" method="get" target="_blank" class="clearfix">
                <input type="hidden" value="www.tutorialrepublic.com" name="sitesearch" />
                <input type="text" name="q" placeholder="Search topics, tutorials, questions and answers..." id="searchInput" class="search" />
                <button type="submit" class="search-btn"><span class="icon-search"></span></button>
            </form>
        </div>
        <div class="social">                
            <a href="https://www.facebook.com/tutorialrepublic" target="_blank" title="Join us on Facebook"><i class="icon-facebook"></i></a>
            <a href="https://twitter.com/tutrepublic" target="_blank" title="Follow us on Twitter"><i class="icon-twitter"></i></a>
            <a href="/contact-us.php" target="_blank" title="Send us an Email"><i class="icon-mail"></i></a>
        </div>
        <button type="button" class="open-search mobile-only">
            <i class="icon-search"></i>
        </button>
    </div>    
</div>
<div class="menu">
    <div class="wrapper">
        <a href="//www.tutorialrepublic.com" title="Home Page">HOME</a>
        <a href="/html-tutorial/" title="HTML Tutorial">HTML5</a>            
        <a href="/css-tutorial/" title="CSS Tutorial">CSS3</a>
        <a href="/javascript-tutorial/" title="JavaScript Tutorial">JAVASCRIPT</a>
        <a href="/jquery-tutorial/" title="jQuery Tutorial">JQUERY</a>
        <a href="/twitter-bootstrap-tutorial/" title="Bootstrap 5 Tutorial">BOOTSTRAP5</a>
		<a href="/twitter-bootstrap-4-tutorial/" class="old-version" title="Bootstrap 4.6 Tutorial">v4.6</a>
        <a href="/php-tutorial/" title="PHP Tutorial">PHP7</a> 
        <a href="/sql-tutorial/" title="SQL Tutorial">SQL</a>
        <a href="/references.php" title="Web References">REFERENCES</a>
        <a href="/practice-examples.php" title="Practice Examples and Demos">EXAMPLES</a>
        <a href="/faq.php" title="Frequently Asked Questions and Answers">FAQ</a>
        <a href="/snippets/gallery.php" title="Bootstrap Code Snippets" target="_blank">SNIPPETS</a>
        <a href="/codelab.php" class="tool-link" target="_blank">Online HTML Editor</a>
    </div>        
</div>    <!--End:Header-->
    <div class="wrapper clearfix">
        <div class="leftcolumn" id="myNav">
		
        <div class="segment"><span>SQL</span> BASIC</div>
<div class="chapters">
    <a href="/sql-tutorial/">SQL Introduction</a>
	<a href="/sql-tutorial/sql-get-started.php">SQL Getting Started</a>
    <a href="/sql-tutorial/sql-syntax.php">SQL Syntax</a>
    <a href="/sql-tutorial/sql-create-database-statement.php">SQL Create Database</a>
    <a href="/sql-tutorial/sql-create-table-statement.php">SQL Create Table</a>
	<a href="/sql-tutorial/sql-constraints.php">SQL Constraints</a>
	<a href="/sql-tutorial/sql-insert-statement.php">SQL Insert</a>
	<a href="/sql-tutorial/sql-select-statement.php">SQL Select</a>
	<a href="/sql-tutorial/sql-where-clause.php">SQL Where</a>
	<a href="/sql-tutorial/sql-and-or-operators.php">SQL AND &amp; OR</a>
	<a href="/sql-tutorial/sql-in-between-operators.php">SQL IN &amp; Between</a>
	<a href="/sql-tutorial/sql-order-by-clause.php">SQL Order By</a>
	<a href="/sql-tutorial/sql-top-clause.php">SQL Top/Limit</a>
	<a href="/sql-tutorial/sql-distinct-clause.php">SQL Distinct</a>
	<a href="/sql-tutorial/sql-update-statement.php">SQL Update</a>
	<a href="/sql-tutorial/sql-delete-statement.php">SQL Delete</a>
	<a href="/sql-tutorial/sql-truncate-table-statement.php">SQL Truncate Table</a>	
	<a href="/sql-tutorial/sql-drop-statement.php">SQL Drop</a>
</div>
<div class="segment"><span>SQL</span> JOINS</div>
<div class="chapters">
	<a href="/sql-tutorial/sql-joining-tables.php">SQL Joining Tables</a>
    <a href="/sql-tutorial/sql-inner-join-operation.php">SQL Inner Join</a>
	<a href="/sql-tutorial/sql-left-join-operation.php">SQL Left Join</a>
	<a href="/sql-tutorial/sql-right-join-operation.php">SQL Right Join</a>
	<a href="/sql-tutorial/sql-full-join-operation.php">SQL Full Join</a>
	<a href="/sql-tutorial/sql-cross-join-operation.php">SQL Cross Join</a>
</div>
<div class="segment"><span>SQL</span> ADVANCED</div>
<div class="chapters">
	<a href="/sql-tutorial/sql-union-operation.php">SQL Union</a>
	<a href="/sql-tutorial/sql-like-operator.php">SQL Like</a>    
	<a href="/sql-tutorial/sql-alter-table-statement.php">SQL Alter Table</a>
	<a href="/sql-tutorial/sql-aliases.php">SQL Aliases</a>	
	<a href="/sql-tutorial/sql-group-by-clause.php">SQL Group By</a>
	<a href="/sql-tutorial/sql-having-clause.php">SQL Having</a>	
	<a href="/sql-tutorial/sql-create-view-statement.php">SQL Create View</a>
	<a href="/sql-tutorial/sql-create-index-statement.php">SQL Create Index</a>
	<a href="/sql-tutorial/sql-dates-and-times.php">SQL Dates and Times</a>
	<a href="/sql-tutorial/sql-cloning-tables.php">SQL Cloning Tables</a>
	<a href="/sql-tutorial/sql-temporary-tables.php">SQL Temporary Tables</a>
	<a href="/sql-tutorial/sql-subqueries.php">SQL Subqueries</a>
	<a href="/sql-tutorial/sql-injection.php">SQL Injection</a>
</div>
<div class="segment"><span>SQL</span> REFERENCE</div>
<ul class="chapters tree-menu">
    <li class="tree"><span class="shorthand">SQL&nbsp;Data&nbsp;Types</span>
        <ul>
            <li><a href="/sql-reference/mysql-data-types.php">MySQL Data Types</a></li> 
			<li><a href="/sql-reference/sql-server-data-types.php">SQL Server Data Types</a></li>          
        </ul>    
	<li><a href="/sql-reference/sql-functions.php">SQL Functions</a></li>
	<li><a href="/references.php" class="more">More references</a></li>
</ul>        
                </div>
        <div class="centercolumn">
            <!--Text Content-->
            <div class="content">
                <div class="leaderboard">

    <div class="ad-label">Advertisements</div>

    <div class="ad-container">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9107540490929984"
     crossorigin="anonymous"></script>
<!-- Responsive Leaderboard -->
<ins class="adsbygoogle"
     style="display:block;width:100%;max-width:728px;height:90px"
     data-ad-client="ca-pub-9107540490929984"
     data-ad-slot="4302666817"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>    </div>

    
</div>                <!-- InstanceBeginEditable name="main_content" -->
                <a href="sql-syntax.php" class="previous-page" title="Go to Previous Page"></a>
                <a href="sql-create-table-statement.php" class="next-page" title="Go to Next Page"></a>
                <h1>SQL <span>CREATE DATABASE</span> Statement</h1>
                <p class="summary">In this tutorial you will learn how to create database in a relational database management system like, MySQL, SQL Server, etc. using SQL.</p>
                <h2>Creating a Database</h2>
                <p>Before doing anything with the data we must need to create a database first. We're assuming that you already have a MySQL, or SQL Server available for your use, as well as you've all the necessary privileges, if not please check out the <a href="sql-get-started.php">getting started guide</a>.</p>
				<p class="space">The SQL <code>CREATE DATABASE</code> statement is used to create a database.</p>
				<h2>Syntax</h2>
				<p>The basic syntax for creating a database can be given with:</p>
				<div class="shadow">
                    <div class="syntax sql"><span class="keyword">CREATE</span> <span class="keyword">DATABASE</span> <i>database_name</i>;</div>
                </div>
				<p>The following SQL statement creates a database named <i>demo</i>:</p>
				<div class="shadow">
                    <div class="syntax sql"><span class="keyword">CREATE</span> <span class="keyword">DATABASE</span> demo;</div>
                </div>
				<p>Creating a database does not select it for use. So, before moving further we must need to select the target database with the <code>USE</code> statement. For example, the <code>USE demo;</code> command sets the <i>demo</i> database as target database for all future commands.</p>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p><strong>Note:</strong> In Unix, the database and table names are case-sensitive, so you must always refer to your database as <code>demo</code>, not as <code>Demo</code>, <code>DEMO</code>, or something else. But, SQL keywords are case-insensitive, like <code>CREATE DATABASE</code> is same as <code>create database</code>.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Creating Database in MySQL</h2>
				<p class="break">Let's create a database in MySQL using the command-line tool.</p>
				<h3>Step 1: Invoke the MySQL command-line tool</h3>
				<p class="break">To invoke the MySQL command line, we've to log in to the MySQL server first. To log in as <code>root</code> user, type the following command in terminal and press enter. You will be asked for your password. Enter your password and press enter, if it is correct the <code>mysql&gt;</code> prompt will appear, via which you will be able to issue SQL statements and view the results.</p>
				<div class="shadow">
                    <div class="syntax sql">
						<span class="shell">shell&gt; </span> <span class="keyword">mysql</span> <span class="keyword">-u</span> <span class="string">root</span> <span class="keyword">-p</span>
					</div>
                </div>
				<h3>Step 2: Creating a MySQL Database</h3>
				<p>Now, execute the following command to create the database named <i>demo</i>.</p>
				<div class="shadow">
                    <div class="syntax sql"><span class="shell">mysql&gt; </span> <span class="keyword">CREATE</span> <span class="keyword">DATABASE</span> demo;</div>
                </div>
				<p>If the database created successfully you'll see the output something like this:</p>
				<div class="output-box sql">
                    Query OK, 1 row affected (0.03 sec)
                </div>
				<p>If you try to create a database that is already exists you'll get an error message. To avoid this in MySQL you can use an optional clause <code>IF NOT EXISTS</code> as follow:</p>
				<div class="shadow break">
                    <div class="syntax sql"><span class="shell">mysql&gt; </span> <span class="keyword">CREATE</span> <span class="keyword">DATABASE</span> <span class="keyword">IF</span> <span class="keyword">NOT</span> <span class="keyword">EXISTS</span> demo;</div>
                </div>
				<h3>Step 3: Selecting the Database</h3>
				<p>Type the following command and press enter. You will see the output <em>"Database changed"</em>. Now our <i>demo</i> database is selected as default database for all future operations.</p>				
				<div class="shadow">
                    <div class="syntax sql"><span class="shell">mysql&gt; </span><span class="keyword">USE</span> demo;</div>
                </div>
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box">
                            <p><strong>Tip:</strong> If you want to see a list of existing databases on the MySQL server, you can execute the statement <code>SHOW DATABASES;</code> on the command line.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="sql-syntax.php" class="previous-page-bottom">Previous Page</a>
                    <a href="sql-create-table-statement.php" class="next-page-bottom">Next Page</a>
                </div>
                <!--End:Bottom Navigation--> 
                <!-- InstanceEndEditable -->
                <div class="bottom-ad clearfix">

     <div class="ad-label">Advertisements</div>

     <!--Rectangle Left-->
     <div class="rectangle-left fl">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9107540490929984"
     crossorigin="anonymous"></script>
        <!-- Large Rectangle Left -->
        <ins class="adsbygoogle"
            style="display:inline-block;width:336px;height:280px"
            data-ad-client="ca-pub-9107540490929984"
            data-ad-slot="8162953958"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
     </div>
     <!--End:Rectangle Left-->

     <!--Rectangle Right-->
     <div class="rectangle-right fr">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9107540490929984"
     crossorigin="anonymous"></script>
        <!-- Large Rectangle Right -->
        <ins class="adsbygoogle"
            style="display:inline-block;width:336px;height:280px"
            data-ad-client="ca-pub-9107540490929984"
            data-ad-slot="3324015654"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
     </div>
     <!--End:Rectangle Right-->

</div>            </div>
            <!--End:Text Content-->
            <!--Feedback Form-->
			<div class="snippets">
	<a href="/snippets/gallery.php" target="_blank"><img src="/lib/images/bootstrap-code-snippets.png" alt="Bootstrap UI Design Templates" /></a>
</div>            <!--End:Feedback Form-->
        </div>        
        <div class="rightcolumn">
            <div class="sidebar">
    
    <div class="ad-label">Advertisements</div>

    <div class="skyscraper primary">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9107540490929984"
        crossorigin="anonymous"></script>
        <!-- Premium Skyscraper -->
        <ins class="adsbygoogle"
            style="display:inline-block;width:160px;height:600px"
            data-ad-client="ca-pub-9107540490929984"
            data-ad-slot="4376141825"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9107540490929984"
     crossorigin="anonymous"></script>
<!-- Bottom Skyscraper -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-9107540490929984"
     data-ad-slot="3387984471"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>        </div>
    </div>
    <!--Footer-->
	<!--Footer-->
<div class="footer">
    <div class="appeal">
        <div class="wrapper">
            <p>Is this website helpful to you? Please give us a
            <a href="/like.php" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=250,width=600,top=150, left='+((screen.width/2)-300));return false;">like</a>,
            or share your <a href="/contact-us.php" target="_blank">feedback</a><em> to help us improve</em>.
            Connect with us on <a href="https://www.facebook.com/tutorialrepublic" target="_blank">Facebook</a> and <a href="https://twitter.com/tutrepublic" target="_blank">Twitter</a> for the latest updates.</p>               
        </div>
    </div>
    <div class="footer-inner">
        <div class="wrapper clearfix">                
            <div class="link-box">
                <h4>About Us</h4>
                <div class="clearfix">
                    <a href="/about-us.php">Our Story</a>                    
                    <a href="/terms-of-use.php">Terms of Use</a>
                    <a href="/privacy-policy.php">Privacy Policy</a>                    
                </div>
            </div>
            <div class="link-box">
                <h4>Contact</h4>
                <div class="clearfix">
                    <a href="/contact-us.php">Contact Us</a>                    
                    <a href="/contact-us.php" target="_blank">Report Error</a>
                    <a href="/advertise-with-us.php">Advertise</a>                    
                </div>
            </div>
            <div class="tool-box">
                <h4>Interactive Tools</h4>
                <div class="tools-list clearfix" id="tools">
					<a href="/bootstrap-icons-classes.php" target="_blank">Bootstrap Icon Search Utility</a>
                    <a href="/html-formatter.php" target="_blank">HTML Formatter</a>
                    <a href="/faq/what-is-the-maximum-length-of-title-and-meta-description-tag.php">Title &amp; Meta Length Calculator</a>
                    <a href="/html-reference/html-color-picker.php">HTML Color Picker</a>
                    <a href="/twitter-bootstrap-button-generator.php" target="_blank">Bootstrap Button Generator</a>
                    <a href="/codelab.php?topic=sql&amp;file=select-all" target="_blank">SQL Playground</a>
                    <a href="/font-awesome-icons-classes.php" target="_blank">Font Awesome Icon Finder</a>
                    <a href="/codelab.php?topic=html&amp;file=hello-world" target="_blank">HTML Editor</a>
                </div>
            </div>
            <div class="footer-logo">
                <p><img src="/lib/images/logo.svg" alt="TutorialRepublic" /><p>
					<div>
						<a href="https://www.buymeacoffee.com/tutrepublic" class="bmc-btn" rel="nofollow" target="_blank">
    						<img src="/lib/images/bmc-btn.png" alt="BMC" />
						</a>
					</div>
            </div>
        </div>
    </div>           
        <div class="bottom-strip">
        <div class="wrapper">
            <div class="notice">Copyright &copy; 2023 Tutorial Republic. All Rights Reserved.</div>
            <div class="social-media">
                <em>Share This:</em>
                <a href="https://facebook.com/sharer.php?u=https://www.tutorialrepublic.com%2Fsql-tutorial%2Fsql-create-database-statement.php" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600,top=150, left='+((screen.width/2)-300));return false;" title="Facebook"><i class="icon-facebook"></i></a>
                <a href="#" id="tweet-btn" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600,top=150, left='+((screen.width/2)-300));return false;" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" id="email-btn" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600,top=150, left='+((screen.width/2)-300));return false;" rel="noreferrer" title="Gmail"><i class="icon-mail"></i></a>
            </div>
        </div>            
    </div>
    <script>
        var title = document.title.replace('- Tutorial Republic', '');
        document.getElementById('tweet-btn').href = 'https://twitter.com/share?text=' + title + '- &url=https://www.tutorialrepublic.com%2Fsql-tutorial%2Fsql-create-database-statement.php';
        document.getElementById('email-btn').href = 'https://mail.google.com/mail/?view=cm&fs=1&su=' + title + '&body=https://www.tutorialrepublic.com%2Fsql-tutorial%2Fsql-create-database-statement.php';
    </script>
</div>
<!--End:Footer-->
    
<div class="backdrop mobile-only"></div>

<!-- TutorialRepublic base script -->
<script>
// Adding CSS files
[	
	'/lib/styles/legacy/extended-1.1.css',
	'/lib/icomoon/style.css'
].forEach(function(href) {
	var link = document.createElement('link');
	link.rel = 'stylesheet';
	link.href = href;
	(document.getElementsByTagName('head')[0]).appendChild(link);
});

// Adding JS files
[
	'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js',
	'/lib/js/prism.js',
	'/lib/js/default-1.3.js'
].forEach(function(src) {
	var script = document.createElement('script');
	script.async = false; // important
	script.src = src;
	(document.getElementsByTagName('body')[0]).appendChild(script);
});

// Showing PropertyMarvels 
var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
if((timezone.indexOf('Calcutta') !== -1) || (timezone.indexOf('Kolkata') !== -1)){
    document.querySelector('.pm').style.display = 'block';
}
</script>


    <!--End:Footer-->
</body>
<!-- InstanceEnd --></html>