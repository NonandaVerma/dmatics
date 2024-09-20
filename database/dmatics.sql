-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Sep 01, 2024 at 04:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmatics`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `description`) VALUES
(1, ' About <blue>D</blue><red>matics:</red>', '<p>\r\nWelcome to Dmatics, the premier online platform dedicated to transforming IT students into industry-ready professionals. At Dmatics, we understand the dynamic nature of the technology sector and the growing demand for skilled, practical knowledge. Our mission is to bridge the gap between academic learning and real-world application by providing top-tier training and hands-on experience with live projects.\r\n\r\nOur comprehensive training programs are meticulously designed to cover the latest trends and technologies in the IT industry. From programming and software development to data analytics and cybersecurity, Dmatics offers a wide array of courses tailored to meet the diverse needs of aspiring IT professionals. Our experienced instructors are industry veterans who bring a wealth of practical knowledge and insights, ensuring that our students gain not only theoretical understanding but also the practical skills essential for the workplace.\r\n\r\nWhat sets Dmatics apart is our commitment to experiential learning. We provide our students with opportunities to work on live projects, simulating real-world scenarios and challenges. This hands-on approach not only enhances technical proficiency but also fosters critical thinking, problem-solving, and teamwork skills. By the time our students complete their training, they are not just job seekers but job-ready candidates equipped to make immediate contributions to any organization.\r\n</p>\r\n<h1>Why <blue>D</blue><red>matics ??</red></h1>\r\n<p> There is no single reason to join Dmatics but a plenty of it, and few of them are mentioned below:-</p>');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `Cperson` varchar(50) NOT NULL,
  `personNo` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `Cperson`, `personNo`, `email`, `address`) VALUES
(1, 'Mr. Alfozen Sheikh', '9876543214<br> 9828587729', 'alfozensheikh@gmail.com', 'DMATICS 1,Banney Niwas, Kuchera - Sankhwas, near Hotel Marwar, High Court Colony, Ratanada, Jodhpur');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `fees` int(11) NOT NULL,
  `description` text NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `duration`, `fees`, `description`, `visible`) VALUES
(1, 'Java', '8 months', 30000, 'Core java, alongwith introduction to OOPs concept, and advanced java concepts like swings, etc.', 0),
(2, 'Python', '9 months', 20000, 'Introduction to basic python alongwith Django, Flask, Numpy to hold your firm grip in data science.', 1),
(5, 'CSS/Bootstrap', '3 months', 10000, 'CSS and Html basic properties like display, flexbox etc.', 0),
(7, 'Software Engineering', '1 month', 5000, 'This subject provides an introduction to the fundamentals of software requirements, distribution of components, data persistence, architectural styles, coding integration, construction technologies, profiling, software testing, slicing tools, software configuration management, deviations and waivers, reverse engineering, approving and implementing software changes, software building, software release management, in-process audits of a software baseline, software construction, object-oriented runtime issues, etc.', 1),
(8, 'Database Systems', '15 days', 2000, 'This subject provides an overview of the basic concepts of data models, normalisation of logical database design, storage organisation of physical database design, indexing, procedural and non-procedural query languages, query processing, transaction processing and its concurrency, control, and recovery, database systems for hotel and hospital management, etc.', 1),
(9, 'Data Analytics', '15 days', 2000, 'This subject gives an overview of the concepts related to data analysis like statistical modelling, total information awareness, distributed file systems, dimensionality reduction, distance measures, mining data streams, link analysis, community detection, clustering, partitioning, Multi-layer Perceptron, Convolutional Neural Network, etc.', 1),
(10, 'Signals and Systems', '2 months', 3000, 'This subject provides an insight into the concepts of sampling, quantisation, interpolation, discrete-time signals, Fourier and Cosine Transforms, Continuous Linear Time-Variant and Invariant, Convolution and Correlation, Feedforward and Feedback, Modulation, Multiplexing, Compression, etc', 1),
(11, 'Go', '5 months', 40000, 'Go was developed by Google in 2007 for APIs and web applications. Go has recently become one of the fastest-growing programming languages due to its simplicity, as well as its ability to handle multicore and networked systems and massive codebases.', 1),
(12, 'Kotlin', '7 months', 30000, 'Kotlin is a general-purpose programming language originally developed and unveiled as Project Kotlin by JetBrains in 2011. The first version was officially released in 2016. It is interoperable with Java and supports functional programming languages.\r\n\r\n', 0),
(13, 'PHP', '6 months', 35000, 'PHP is an open-source programming language created in 1990. Many web developers find it essential to learn PHP, as this language is used to build more than 80% of websites on the Internet, including notable sites like Facebook and Yahoo.', 1),
(15, 'Swift', '4 months', 18000, 'An open-source programming language that is easy to learn, Swift supports almost everything from the programming language Objective-C. Swift requires fewer coding skills compared with other programming languages, and it can be used with IBM Swift Sandbox and IBM Bluemix. Swift is used in popular iOS apps like WordPress, Mozilla Firefox, SoundCloud, and even in the game Flappy Bird.', 0),
(16, 'R', '4 months', 15000, 'R is an open-source language that is essentially a different version of the S language. Much of the code that developers write for S runs on R without modification.\r\n\r\nApplications built in R are used for processing statistics, including linear and nonlinear modeling, calculation, testing, visualization, and analysis. Applications coded using R can interface with a number of databases and process both structured and unstructured data.', 1),
(17, 'Ruby', '6 months', 25000, 'if you want to start with a language that is known for being relatively simple to learn, consider Ruby. Developed in the 1990s, it was designed to have a more human-friendly syntax while still being flexible from the standpoint of its object-oriented architecture that supports procedural and functional programming notation. A web-application framework that is implemented in Ruby is Ruby on Rails (“RoR”). ', 1),
(18, 'Matlab', '5 months', 35000, 'Matlab is a proprietary programming language owned by MathWorks and originally released in the mid-1980s. It is built specifically for use by scientists and engineers.\r\n\r\nProgrammers use Matlab to build machine learning and deep learning applications. Matlab-based programs enable users to analyze data, create algorithms, process images, and verify research.', 1),
(19, 'Typescript', '4 months', 20000, 'TypeScript is a newcomer to top programming language lists, but it’s making headway. It was developed in 2012 by Microsoft and is a typed version of JavaScript that is well suited for large code bases. TypeScript is used to create JavaScript-based projects with typing in both client-side and server-side development, making useful for catching errors and preventing systemic issues.', 1),
(20, 'HTML', '2 months', 15000, 'HTML(HyperText Markup Language) is the standard language for creating web pages and applications. HTML is used to create web pages. You can use HTML to add images, links, and other types of content to your web page. HTML is a simple programming language; you don\'t need to know much about it to create a basic web page.', 1),
(21, 'SQL', '4 months', 18000, 'SQL is a standard database query language. It is used to access and manipulate data in databases. SQL is a declarative language that specifies the desired results, but not the steps to achieve those results. SQL is a powerful tool for accessing and manipulating data, and it is the world\'s most widely used database query language', 0),
(22, 'CSS', '1 month', 5000, 'CSS (Cascading Style Sheets) is a style sheet language used to describe how a page that was produced in a markup language is presented. A style sheet, which is a set of rules for web browsers, can control an HTML or XML.', 0),
(23, 'NoSQL', '2 months', 10000, 'NoSQL databases are non-relational databases designed to provide high performance and scalability. And NoSQL databases are often used in big data applications, where data is distributed across many nodes.', 1),
(24, 'Rust', '3 months', 16000, 'Rust is a programming language designed to be safe, concurrent, and practical. It is a systems programming language that runs blazingly fast, prevents segfaults, and guarantees thread safety. Rust is also memory-efficient: it uses minimal memory, making it ideal for embedded systems.', 1),
(25, 'Perl', '4 months', 20000, 'Perl is an interpreted, high-level, general-purpose programming language. Although Perl is not officially an acronym, various backronyms exist, including \"Practical Extraction and Report Language.\" Perl was originally developed by Larry Wall in 1987 as a general-purpose Unix scripting language to make report processing easier. Since then, it has undergone many changes and revisions. ', 1),
(26, 'Javascript', '5 months', 30000, 'JavaScript was one of the key programming languages alongside HTML and CSS that helped build the internet. JavaScript was created in 1995 by Netscape, the company that released the famous Netscape Navigator browser, to eliminate the crudeness of static web pages and add a pinch of dynamic behavior to them.', 1),
(27, 'VB.net', '3 months', 25000, 'Visual Basic was developed by Microsoft in the year 2001. It is a high-level language that supports Object Oriented Capability. It was mainly used for Web Applications and Desktop applications. Visual Basic is now a legacy language and has been replaced by better languages and frameworks', 1),
(28, 'C#', '2 months', 10000, 'C# was developed by Microsoft in 2001, along with its .NET framework. C# is very similar to C++ or Java in terms of syntax. Initially, .NET was used to develop Windows Forms and to develop Web Applications with ASP.NET. ', 1),
(29, 'Delphi', '5 months', 10000, 'Delphi is the name of a compiler for the Object Pascal, the object-oriented version of Pascal, which Larry Tesler developed in the late 1960s. Although there is existing software written on Delphi/Object Pascal, they are not in use anymore. ', 1),
(30, 'Per', '3 months', 18000, 'Per is a utilitarian scripting language evolving from CGI scripting. Developed by Larry Wall in 1987, it is easy to learn and has quite a good number of software written under it. Although not the topmost language, it has quite a good demand that can be visible in many job descriptions', 1),
(31, 'F#', '4 months', 40000, 'Microsoft introduced F# in 2005 as an Object Oriented, functional language that compiles to .NET Intermediate Language. As a functional language, it expresses programs as mathematical functions and does not allow mutable states and data (Object Oriented Concepts). Since F# is only suited for certain programs, not many jobs demand it as the primary requirement.', 1),
(32, 'Bash', '4 months', 30000, 'Bash is a scripting language written by Brian Fox and released in the year 1989. It is mainly used to automate tasks on Unix and Linux Platforms. Bash has a fairly easy syntax. Although it is not a programming language by itself, it is used for many automation tasks and Linux / Unix Administration purposes. Hence, many jobs have Bash as a requirement, although not primary.', 1),
(33, 'COBOL', '5 months', 50000, 'COBOL is a very old programming language mainly used for mainframe systems. It was combinedly developed by CODASYL, ANSI, and ISO/IEC in 1959. Although less, there is an excellent chance of exiting employees since people who know COBOL today are very scarce. But there are not many upcoming opportunities with COBOL.', 1),
(34, 'Prolog', '3 months', 12000, 'Prolog is a declarative language based on mathematical and logical theories. Developed by Alain Colmerauer in 1973, It is mainly used in research, Artificial Intelligence, and complex systems. It has a difficult syntax and is worthwhile to learn only if you are in a field that requires a prolog. ', 1),
(35, 'Julia', '4 months', 15000, 'Julia is quite a new language and is a descendant of C. Developed by Jeff Bezanson, Stefan Karpinski, Viral B. Shah, and other contributors in 2012, and it is mainly designed for data science and analytics-based applications.', 1),
(36, 'Full-stack development', '7 months', 55000, 'Full Stack Course breaks down the fundamentals of each technology that you would require to become a Full Stack Developer.\r\nThe entire course is broken down into five separate segments: Frontend, Backend, Database, Other Essential Technologies and Debugging/Version Control. Each section includes multiple technologies to help you gain more experience as a developer.', 1),
(38, 'AWS Technology', '5 months', 35000, 'AWS Support technology and programs help you manage and monitor your environment to ensure performance and cost optimization, manage security and downtime risks, and automate remediation of issues to the extent possible.\r\n\r\nAWS offers several tools to help you monitor your environment’s health and compliance with best practices. With these tools, you can save time by automating responses to alerts and notifications and integrating with other management systems you may be using.', 1),
(39, 'Cloud Computing', '5 months', 30000, 'Essential characteristics, history, the business case for cloud, and the emerging technologies enabled by cloud, Cloud related trends including HybridMulticloud, Microservices, Serverless, Cloud Native, DevOps, and Application Modernization etc.', 1),
(40, 'Cyber-security', '6 months', 40000, 'Learn to identify cybersecurity foundations and standard models for effective protection strategies, Explain attacker techniques, including phishing, social engineering, and ransomware.\r\nGain skills like- Authentication, Cybersecurity, Privacy, Mitigation, Protection ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `personNUMBER` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `enquiry` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `personNUMBER`, `email`, `enquiry`) VALUES
(1, 'Mr. Somesh Verma', '9414134919', 'someshverma@gmail.com', 'Fees structure and course curriculum of full stack development.'),
(2, 'Miss. Nonanda Verma', '9768543245', 'nonandaver@gmail.com', 'duration and tools under practice for ui/ux designing course.'),
(6, 'Nitasha Joshi', '9988773344', 'joshinitasha12@gmail.com', 'Is there any placement assisstance for the students who purchase the bootcamp course?'),
(17, 'Priya Solanki', '7788432611', 'prsol123@gmail.com', 'Do you provide internships?'),
(18, 'Chandan Sharma', '8820053412', 'sharmachand@gmail.com', 'What is the training duration for full stack development? Do your provide paid internships?'),
(19, 'jhalak gehlot', '9414134919', 'gehjhalak1882@gmail.com', 'Are their any vacancies for summer paid internships in cloud computing domain?'),
(20, 'Kundan Sharma', '9988774352', 'kunsh134@gmail.com', 'Is there any batch in morning timing for Mern stack development ??');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `visible`) VALUES
(6, 'g3.jpg', 0),
(7, 'g4.jfif', 1),
(8, 'g5.jpg', 1),
(9, 'g6.jpg', 1),
(10, 'g7.jfif', 0),
(11, 'g8.jpg', 0),
(30, 'aboutusslider.jpg', 1),
(31, 'courses.jpg', 1),
(32, 'dmaticslogo.png', 0),
(33, 'g1.jpg', 1),
(34, 'g2.webp', 0),
(35, 'intro.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `description`) VALUES
(1, 'Welcome to <blue>D</blue><red>matics:</red>', '<p>\r\nWelcome to Dmatics, the premier online platform dedicated to transforming IT students into industry-ready professionals. At Dmatics, we understand the dynamic nature of the technology sector and the growing demand for skilled, practical knowledge. Our mission is to bridge the gap between academic learning and real-world application by providing top-tier training and hands-on experience with live projects.</p>\r\n<p>\r\nDmatics, a dynamic and innovative company specializing in software development, website maintenance, and IT training. At Dmatics, our mission is to deliver cutting-edge software solutions, ensure seamless website performance, and equip IT students with the skills and knowledge required to excel in the competitive job market.\r\nDmatics provides cost effective solutions for Large and Medium Enterprises</p>\r\n<p>\r\nOur comprehensive training programs are meticulously designed to cover the latest trends and technologies in the IT industry. From programming and software development to data analytics and cybersecurity, Dmatics offers a wide array of courses tailored to meet the diverse needs of aspiring IT professionals. Our experienced instructors are industry veterans who bring a wealth of practical knowledge and insights, ensuring that our students gain not only theoretical understanding but also the practical skills essential for the workplace.</p>\r\n<p>\r\nWhat sets Dmatics apart is our commitment to experiential learning. We provide our students with opportunities to work on live projects, simulating real-world scenarios and challenges. This hands-on approach not only enhances technical proficiency but also fosters critical thinking, problem-solving, and teamwork skills. By the time our students complete their training, they are not just job seekers but job-ready candidates equipped to make immediate contributions to any organization.</p>\r\n<p>Join Dmatics today and take the first step towards a successful and fulfilling career in the IT industry.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `visible`) VALUES
(1, 'Hackathon competition', 'We are organizing a hackathon competition this Saturday as a fun activity to test your coding skills so that you can analyze your performance.\r\nLet\'s see who is ready to take up challenges.\r\nTiming- 9:00 to 11:00 a.m. ', 1),
(6, 'Frontend web development ', 'We are soon starting this batch whereby html, javascript, react js along with MySql and basics of PHP will be introduced', 1),
(7, 'Summer vacations', 'Due to amid heatwave prediction from 10 june to 1 july, Dmatics will remain closed', 0),
(8, 'Python Masterclass', 'On Sunday 8 June, a live 3 hour python masterclass will be conducted from 10 a.m. to 1 p.m. which will also serve as revision session for students.', 1),
(9, 'C++ batch', 'We are starting new batch of C from July', 0),
(10, 'Cloud computing', 'We are happy to announce our new batch in August, considering the high-demand of students as well as industry. Book your course now !!', 1),
(11, 'Alumni Meetup', 'On this Sunday, DMatics is organizing an online meetup session between alumni and students which will provide an open opportunity to discuss current day trends, quick tips, ideas, projects etc.<br>\r\nTiming: 10 a.m. to 1 p.m.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(3) NOT NULL,
  `name` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `name`, `email`, `contact`, `course`) VALUES
(3, 'bhavya verma', 'bhaver18@gmail.com', '9983882005', 'C/C++ Training'),
(5, 'Shruti Jain', 'shrjain18@gmail.com', '9829205599', 'Django Framework'),
(7, 'Mohit gehlot', 'gehlotmoh@gmail.com', '6367682732', 'Android programming'),
(8, 'Somesh verma', 'somver5oct@gmail.com', '9414134919', 'Digital Marketing'),
(9, 'Madhu verma', 'madver1994@gmail.com', '97848828009', 'Web Development'),
(11, 'Navya Thakur', 'thakurnavya14apr@gmail.com', '8782838890', 'Google Ads/PPC'),
(15, 'Chandan sharma', 'chansharma14@gmail.com', '9987654321', 'Angular Training');

-- --------------------------------------------------------

--
-- Table structure for table `trainingcourse`
--

CREATE TABLE `trainingcourse` (
  `id` int(3) NOT NULL,
  `tcname` varchar(50) NOT NULL,
  `tcdetail` varchar(500) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainingcourse`
--

INSERT INTO `trainingcourse` (`id`, `tcname`, `tcdetail`, `duration`, `amount`) VALUES
(1, 'Web Development', 'HTML (Hypertext Markup Language) and CSS (Cascading Style Sheets) are two of the core technologies for building Web pages. HTML provides the structure of the page, CSS the (visual and aural) layout, for a variety of devices.', '6 months', '40,000'),
(2, 'Android Programming', 'Android software development is the process by which new applications are created for the Android operating system. Applications are usually developed in the Java programming language using the Android Software Development Kit.', '5 months', '35,000'),
(3, 'Apple iOS', 'With plans to slowly retire the long-used Objective-C, Apple has introduced a new programming language, called Swift, for designing apps and applications to run on Apple iOS devices and Apple Macintosh computers.', '6 months', '40,000'),
(4, 'Website Designing', 'HTML (Hypertext Markup Language) and CSS (Cascading Style Sheets) are two of the core technologies for building Web pages. HTML provides the structure of the page, CSS the (visual and aural) layout, for a variety of devices.', '2 months', '15,000'),
(5, 'WordPress', 'WordPress is an online, open source website creation tool written in PHP. But in non-geek speak, it’s probably the easiest and most powerful blogging and website content management system (or CMS) in existence today', '4 months', '35,000'),
(6, ' Laravel', 'Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.', '5 months', '28,000'),
(7, 'Digital Marketing', 'DMatics offer the Professional Course in Digital Marketing for fresher as well as working professionals. This course is anyone who wants to make a career in Digital Marketing. During the course, the students will be made to work on live projects, giving them an insight on how a professional should work. By doing this course, one can be employed in Software Development Company or can run their own business through Freelancing and many other.', '3.5 months', '22,000'),
(8, 'C language', 'C Training Course in Jodhpur, is the base for all the existing languages used today, as it has simple syntax along with conventional functionalities. This language can write everything from several operating systems (such as Windows and others) to the complicated programs such as Git, Oracle database, Python interpreter, and more.', '4 months', '30,000'),
(9, 'C++', 'C++ Training Course in Jodhpur, is like an object-oriented language that supports both structure and OOP language. Also, such programs are comparatively easy to manage and expand. Also, it acts as a mid-level language as it communicates with hardware directly. Though, it is an old language but highly robust in performance and include rich functional library.', '3 months', '25,000'),
(10, 'Angular', 'Angular Js training Course in Jodhpur, it has changed the entire process of developing web application, and this technology is dominating the web market by offering a simplified way of maintaining the code. The primary aim of Angular Js is to satisfy the expectations of current developers, who demand quick and reliable performance and responsiveness in their web applications.', '4 months', '28,000'),
(11, 'Google Ads/SEO', 'Get expert in Digital marketing and learn how to run advertisements on website and generate income through pay per click concept.', '4 months', '30,000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `upass`) VALUES
(1, 'Nonanda Verma', 'nonandaverma1234'),
(3, 'admin', 'admin'),
(4, 'demo', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `whywe`
--

CREATE TABLE `whywe` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `whywe`
--

INSERT INTO `whywe` (`id`, `title`, `visible`) VALUES
(10, 'Live industrial projects', 1),
(11, 'Expert Developers', 1),
(12, 'Placement assistance', 1),
(13, '100% Practical concept understanding', 1),
(14, 'Interview preparation sessions', 1),
(15, 'Industry Practitioners', 1),
(16, 'Air condition Classrooms', 1),
(18, 'Branches opened in various cities to facilitate sp', 1),
(19, 'Led Computer Lab with best Configuration Computers', 0),
(20, 'Beginner friendly mode of teaching', 0),
(21, 'Test series and regular doubt sessions', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainingcourse`
--
ALTER TABLE `trainingcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whywe`
--
ALTER TABLE `whywe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `trainingcourse`
--
ALTER TABLE `trainingcourse`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `whywe`
--
ALTER TABLE `whywe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
