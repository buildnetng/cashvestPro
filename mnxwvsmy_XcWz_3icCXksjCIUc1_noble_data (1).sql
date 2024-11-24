-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2024 at 06:54 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mnxwvsmy_XcWz*3icCXksjCIUc1_noble_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `blog_title`, `description`, `author_id`, `date_created`, `date_updated`, `image_path`) VALUES
(35, 'Understanding the Current Job Market for Teachers: Trends, Challenges, and Opportunities', '<p>Introduction:</p><p>The teaching profession has always been vital to the society, but in recent years, the job market for teachers has undergone significant changes. Economic shifts, technological advancements, and evolving educational needs have all influenced the demand for teachers, creating both challenges and opportunities. In this blog post, we will explore the key trends shaping the teaching job market today and offer insights on how to navigate this dynamic landscape.</p><p><br></p><p>1. Increased Demand for Specialized Educators:</p><p>One of the most notable trends in the current job market is the growing demand for specialized educators. Schools are increasingly looking for teachers with expertise in areas such as STEM (Science, Technology, Engineering, and Mathematics), special education, and English as a Second Language (ESL). These specialized roles are essential for addressing the diverse needs of students and preparing them for the future. If you have training or experience in these areas, you may find that your skills are highly sought after. For those considering further education, pursuing certifications in these fields could enhance your employability and open up new career opportunities.</p><p><br></p><p>2. The Impact of Technology on Teaching Jobs:</p><p>Technology continues to play a transformative role in education, influencing both the way teachers teach and the skills they need to succeed. The rise of digital learning platforms, remote teaching, and the integration of technology in the classroom has led to a demand for educators who are tech inclined and capable of using digital tools effectively. Teachers who can blend traditional teaching methods with innovative technologies are well-positioned to thrive in today’s job market. Additionally, understanding how to manage and engage students in a virtual environment is becoming increasingly important, particularly as schools continue to explore hybrid or fully online learning models.</p><p><br></p><p>3. Geographic Disparities in Job Opportunities:</p><p>The job market for teachers can vary significantly depending on geographic location. Urban areas often have a higher demand for teachers, particularly in subjects like math, science, and special education. On the other hand, rural areas may struggle to attract and retain qualified teachers, creating opportunities for those willing to relocate. Understanding these geographic disparities can help you target your job search more effectively. If you are open to moving, exploring teaching opportunities in regions with higher demand could increase your chances of securing a position quickly.</p><p><br></p><p>4. The Ongoing Teacher Shortage:</p><p>Despite the challenges, one of the constants in the teaching job market is the ongoing shortage of qualified teachers in many areas. This shortage has been exacerbated by factors such as teacher burnout, retirement, and the increasing demands placed on educators. While this shortage presents challenges for schools, it also creates opportunities for job seekers, particularly those who are flexible and willing to work in high-need areas. Schools are often willing to offer competitive salaries, benefits, and signing bonuses to attract and retain talent, making it a favorable time for teachers to negotiate their terms.</p><p><br></p><p>5. The Role of Professional Development:</p><p>In a competitive job market, continuous professional development is key to staying ahead. Schools are increasingly looking for teachers who are committed to lifelong learning and who actively seek out opportunities to enhance their skills. Whether it’s through attending workshops, obtaining advanced degrees, or pursuing certifications, investing in your professional growth can make you a more attractive candidate. Additionally, many schools offer professional development programs to help teachers stay current with the latest educational trends and technologies, so be sure to inquire about these opportunities during your job search.</p><p><br></p><p>6. The Importance of Networking and Support:</p><p>Networking remains a critical component of finding a teaching job in today’s market. Building relationships with other educators, administrators, and even parents can help you learn about job openings and gain valuable insights into different schools and districts. Joining professional organizations, attending education conferences, and participating in online communities can also expand your network and provide support as you explore the job market. Moreover, working with a teaching agency like Noble Teachers can connect you with opportunities that align with your skills and career goals.</p><p><br></p><p>Conclusion:</p><p>The current job market for teachers is both challenging and full of potential. By understanding the trends, staying adaptable, and investing in your professional development, you can position yourself for success in this ever-evolving field. Noble Teachers is here to help you navigate the complexities of the job market and find the right opportunity for you.</p><p><br></p>', NULL, '2024-09-04 17:17:50', '2024-09-04 17:17:50', 'uploads/blog_post/blog_66d8963e235ee4.69776280.jpg'),
(36, 'Empowering Education: How Noble Teachers Connects Schools, Teachers, and Parents', '<p>Introduction:</p><p>Education is the foundation of our future, and at Noble Teachers, we believe in building that future together. We are here to make those connections easy and impactful.</p><p><br></p><p>The Noble Teachers Difference:</p><p>What sets Noble Teachers apart from other teaching agencies is our holistic approach. We don’t just fill vacancies; we foster relationships that empower educators, enrich learning environments, and enhance student outcomes. Our commitment to excellence ensures that each placement is not only a match on paper but also a match in values, skills, and goals.</p><p><br></p><p>For Schools:</p><p>Finding the right staff is crucial to maintaining a thriving educational environment. Noble Teachers understands the unique challenges schools face when recruiting, whether it’s for permanent roles or temporary coverage due to staff absences. We take the burden off your shoulders by handling the recruitment process end-to-end. We ensure you find the best fit for your school’s needs.</p><p><br></p><p>For Teachers:</p><p>We know that finding the right teaching position is more than just landing a job; it is about finding a place where you can make a real difference. Noble Teachers connects educators with roles that align with their expertise, passion, and career goals. Whether you are looking for a permanent position, a temporary role, or a chance to work in a specialized educational setting, we are here to help you take the next step in your teaching journey.</p><p><br></p><p>For Parents:</p><p>Parents play a pivotal role in their child’s education, and finding the right teacher can make all the difference. Noble Teachers not only helps schools find educators but also assists parents in connecting with qualified teachers for additional support. Whether it’s for tutoring, special education needs, or homeschooling, we ensure your child is in capable and caring hands.</p><p><br></p><p>Success Stories:</p><p>One of our greatest joys is seeing the impact of our work through the success stories of those we have helped. From teachers who have found their dream jobs to schools that have filled critical roles with outstanding staff, our testimonials speak to the trust and satisfaction our clients have in Noble Teachers. We invite you to read these stories and see how we are making a difference in education every day.</p><p><br></p><p>Conclusion:</p><p>At Noble Teachers, we are not just about filling roles; we are about building futures. By empowering schools, teachers, and parents, we contribute to a stronger educational system that benefits everyone. If you’re looking to make a meaningful connection in education, Noble Teachers is here to help you every step of the way.</p>', NULL, '2024-09-04 17:34:00', '2024-09-04 17:34:00', 'uploads/blog_post/blog_66d89a08485ef6.40979729.jpg'),
(37, 'The Power of Personalized Placements: How Noble Teachers Matches Educators with the Perfect Role', '<p>Introduction:</p><p>In education, the right match can make all the difference. A personalized placement creates the foundation for success. At Noble Teachers, we specialize in understanding the specific needs of both schools and educators, ensuring every placement is a perfect fit.</p><p><br></p><p>Understanding the Needs of Schools:</p><p>Schools are as diverse as the students they serve. Each institution has its own culture, values, and educational goals, which means the needs for teaching staff can vary significantly. Some schools may require educators with experience in special education, while others may need a teacher with a strong background in STEM. At Noble Teachers, we take the time to understand the unique requirements of each school we work with. This enables us to provide solutions that align with the school’s mission and student needs.</p><p><br></p><p>The Benefits of Personalized Placements:</p><p>Personalized placements benefit everyone involved. Schools receive teachers who are not only qualified but are also a great cultural fit, leading to higher retention rates and more positive outcomes for students. Teachers find positions where they feel supported, valued, and inspired, which enhances their job satisfaction and effectiveness in the classroom. And for parents, this means their children are taught by educators who are genuinely passionate and well-suited to their roles, fostering a better learning environment.</p><p><br></p><p>Our Process:</p><p>Our personalized placement process begins with a deep dive into the needs and goals of both the school and the teacher. We consider factors such as educational philosophy, classroom management style, experience level, and long-term career aspirations. By conducting thorough interviews and assessments, we ensure that each placement is not just a job but a partnership. This careful matching process sets both schools and teachers up for success, creating a more cohesive and supportive educational community.</p><p><br></p><p>Success in Action:</p><p>One of our recent success stories involves a school that needed a teacher with a specific skill set in special education. Through our personalized approach, we connected them with a teacher who had extensive experience working with children with learning disabilities and who shared the school’s inclusive educational values. The result was an integration of the teacher into the school community and immediate positive feedback from both students and parents.</p><p><br></p><p>Conclusion:</p><p>At Noble Teachers, we believe that education thrives when the right people come together. Our commitment to personalized placements ensures that both schools and teachers find the best possible match, leading to better educational experiences for everyone involved.&nbsp;</p><p><br></p>', NULL, '2024-09-04 17:38:02', '2024-09-04 17:38:02', 'uploads/blog_post/blog_66d89afabdfbc1.02636975.jpg'),
(38, 'Building a Sustainable Future: The Role of Education in Community Engagement', '<p>Introduction:</p><p>Sustainability is not just about environmental practices—it is about creating a lasting impact in the communities we serve. At Noble Teachers, we believe that education plays a critical role in fostering sustainable development and strengthening community engagement. By empowering educators and supporting schools, we help build a future where education is not only a pathway to individual success but also a tool for nurturing resilient, engaged communities.</p><p><br></p><p>Education as a Pillar of Sustainable Development:</p><p>Sustainability begins with education. When students are taught about the importance of sustainable practices, from environmental stewardship to social responsibility, they carry these values into their daily lives. Schools that prioritize sustainability in their curriculum inspire students to become conscious, active members of their communities. At Noble Teachers, we recognize the importance of placing educators who are not only passionate about teaching but also committed to promoting sustainability and community engagement in their classrooms.</p><p><br></p><p>Connecting Schools with Sustainability-Minded Educators:</p><p>Finding teachers who share a school’s commitment to sustainability is crucial. Educators who understand the importance of sustainable practices can integrate these concepts into their teaching, creating a curriculum that reflects the values of the school and the community. Through projects on environmental conservation, lessons on social justice, or initiatives reduce the school’s carbon footprint, these teachers help shape students into responsible global citizens. Noble Teachers is dedicated to connecting schools with educators who are aligned with these goals, ensuring that sustainability is woven into the fabric of education.</p><p><br></p><p>The Power of Community Engagement in Education:</p><p>Community engagement is a cornerstone of sustainable development. Schools that engage with their local communities create a stronger, more connected educational environment. By collaborating with local organizations, businesses, and families, schools can provide students with real-world learning opportunities that extend beyond the classroom. Noble Teachers supports this by placing teachers who are not only skilled educators but also enthusiastic about building relationships within the community. These teachers play an active role in community initiatives, whether it’s through organizing volunteer programs, participating in local events, or developing partnerships that benefit both the school and the community.</p><p><br></p><p>Supporting Sustainable Education Initiatives:</p><p>Noble Teachers is committed to supporting schools that prioritize sustainability and community engagement. We understand that sustainability isn’t just a trend—it’s a necessary approach to ensuring the well-being of future generations. By working closely with schools, we help implement sustainable education initiatives that resonate with students and the wider community. We are here to support schools in their mission to create a more sustainable world.</p><p><br></p><p>Success Stories in Sustainable Education:</p><p>We have seen firsthand the impact that sustainability-minded educators can have on their students and communities. For example, one of our partner schools recently launched a school-wide recycling programme led by a teacher we placed. This initiative not only reduced waste but also educated students on the importance of environmental conservation. Another school organized a community garden project, where students learned about organic farming and food sustainability while giving back to their local community. These projects are just a few examples of how education can drive sustainable change.</p><p><br></p><p>Conclusion:</p><p>At Noble Teachers, we believe that the future of education is inextricably linked with the future of our communities and our planet. By placing educators who are passionate about sustainability and community engagement, we help build a foundation for a brighter, more sustainable future. Education has the power to inspire change, and we are proud to play a role in connecting schools with the teachers who can make that change happen.</p><p><br></p>', NULL, '2024-09-04 17:41:36', '2024-09-04 17:41:36', 'uploads/blog_post/blog_66d89bd0bf6aa0.19388076.jpg'),
(40, 'How to Navigate the Job Market as a New Teacher: Tips for Finding Your First Teaching Position', '<p>Introduction&nbsp;</p><p>Graduating with a teaching degree is an exciting milestone, but it is just the beginning of your journey. The job market for teachers can be competitive, especially for those just starting their careers. However, with the right strategies and mindset, you can find a position that not only fits your qualifications but also aligns with your passion for education. In this blog post, we will guide you through the process of navigating the job market as a new teacher, helping you take the first steps toward a fulfilling career in education.</p><p>Start Early and Stay Organized: One of the best ways to stand out in a competitive job market is to start your job search early. Many schools begin hiring for the upcoming school year as early as January or February, so it is important to begin preparing your application materials well in advance. Keep an organized list of schools or districts you are interested in, along with deadlines and application requirements. By staying ahead of the game, you will have a better chance of landing an interview before positions fill up.</p><p><br></p><p>Prepare your CV and Cover Letter: Your CV and cover letter are your first chance to make a strong impression on potential employers. Rather than sending out a generic CV, take the time to prepare it to each position you apply for. Highlight your relevant experience, skills, and any unique contributions you can bring to the school. Your cover letter should also reflect your enthusiasm for the specific school or district, demonstrating that you have researched their educational philosophy and how you can contribute to their goals.</p><p><br></p><p>Leverage Your Student Teaching Experience: As a new teacher, your student teaching experience is one of your most valuable assets. Be sure to highlight specific examples of how you have applied your teaching methods in the classroom, managed diverse learning needs, and collaborated with other educators. If you received positive feedback from your mentor teacher or students, mention this in your application to reinforce your effectiveness as an educator. Schools want to see that you can translate your training into real-world success.</p><p><br></p><p>Network with Other Educators: Networking is key in any job search, and the education field is no exception. Connect with other educators, both online and in person, to learn about job openings and get advice on your search. Attend education job fairs, join teacher-focused social media groups, and reach out to former professors or colleagues who may have connections in the schools or districts you are interested in. Building a professional network can help you uncover opportunities that aren’t advertised publicly and give you insights into different school cultures.</p><p><br></p><p>Prepare for Interviews with Confidence: Once you have landed an interview, preparation is essential. Research the school’s mission, values, and any recent news or achievements to show that you are informed and genuinely interested in the position. Be ready to discuss your teaching philosophy, classroom management strategies, and how you plan to engage students in their learning. Practicing your answers to common interview questions with a friend or mentor can help you feel more confident and polished during the actual interview.</p><p><br></p><p>Be Open to Different Opportunities: While you may have an ideal teaching position in mind, it is important to stay open to a variety of opportunities, especially as a new teacher. Consider applying for temporary or substitute positions, as these can lead to full-time roles and give you valuable experience in different educational settings. Additionally, do not limit your search to just one type of school—explore opportunities in public, private, charter, and international schools to broaden your options.</p><p><br></p><p>Stay Positive and Persistent: The job search process can be challenging, and it is normal to face some setbacks along the way. However, staying positive and persistent is key to eventually finding the right position. Each application and interview is an opportunity to learn and improve your approach. Keep refining your materials, expanding your network, and seeking feedback from mentors or peers. Remember that your first teaching job is just the beginning of a long and rewarding career, and with perseverance, you’ll find the right fit.</p><p>Conclusion: Navigating the job market as a new teacher can be daunting, but with preparation, flexibility, and determination, you can secure a position that sets you on the path to success. By starting early, leveraging your experience, and building your network, you will increase your chances of finding a teaching role that matches your skills and passion. At Noble Teachers, we are here to support you every step of the way.</p>', NULL, '2024-09-04 17:48:00', '2024-09-04 17:48:00', 'uploads/blog_post/blog_66d89d508bb489.60742124.jpg'),
(43, 'Best Practices for a Successful Job Search: Tips for Teachers Looking to Land Their Ideal Job', '<p>Introduction:</p><p>Searching for a new teaching position can be both exciting and daunting. To help you go through this journey, we have compiled a list of best practices that can enhance your job search and increase your chances of landing a position that aligns with your skills, values, and career goals.</p><p><br></p><p>1. Define Your Goals and Priorities:</p><p>Before you dive into the job search, take some time to reflect on what you are looking for in a teaching position. Consider factors like the grade level you want to teach, the type of school environment you thrive in, and the location that suits your lifestyle. Are you looking for a full-time position, or are you open to part-time or temporary roles? Understanding your goals and priorities will help you focus your search and target opportunities that truly align with what you want.</p><p><br></p><p>2. Utilize Online Job Boards and Teaching Agencies:</p><p>The internet offers a wealth of resources for job seekers, and online job boards are a great place to start. Websites like Indeed, TES, and LinkedIn regularly post teaching vacancies, allowing you to apply directly through their platforms. Additionally, consider working with a teaching agency like Noble Teachers, which can connect you with schools that match your profile and provide personalized support throughout the application process. Agencies often have access to exclusive job listings and can help you navigate the nuances of the education job market.</p><p><br></p><p>3. Network with Other Educators:</p><p>Networking is one of the most effective ways to learn about job opportunities and gain insights into the education field. Attend education conferences, join professional organizations, and participate in online forums or social media groups for teachers. Building relationships with other educators, administrators, and education professionals can provide you with valuable referrals and insider information on upcoming vacancies. Don’t hesitate to reach out to your network for advice or introductions—they can be instrumental in helping you land your next job.</p><p><br></p><p>4. Stay Organized and Keep Track of Applications:</p><p>During your job search, it is important to stay organized and keep track of the positions you have applied for, along with any follow-up actions. Create a spreadsheet or use a job search tracking tool to record details such as application deadlines, interview dates, and the status of each application. This will help you manage your time effectively, ensure you meet deadlines, and avoid the mistake of applying to the same job multiple times. Staying organized also allows you to follow up promptly with schools after interviews, reinforcing your interest in the position.</p><p><br></p><p>5. Be Persistent and Stay Positive:</p><p>The job search process can be challenging, and it is normal to encounter setbacks along the way. However, persistence and a positive mindset are crucial to your success. If you don’t hear back from a school or receive a rejection, don’t be discouraged—use it as an opportunity to learn and improve. Seek feedback where possible, refine your application materials, and continue applying to other positions. Remember that every application and interview brings you closer to finding the right job. Keep your end goal in sight, and stay motivated by celebrating small wins along the way.</p><p><br></p><p>Conclusion:</p><p>Finding a teaching job that aligns with your skills and career goals takes time and effort, but by following these best practices, you can navigate the job search process more effectively. Define your goals, craft compelling application materials, leverage your network, and stay organized throughout your search. With persistence and a positive attitude, you will increase your chances of landing a position that not only matches your qualifications but also inspires you to grow as an educator. At Noble Teachers, we are here to support you every step of the way—contact us today to learn how we can help you succeed in your job search.</p><p><br></p>', NULL, '2024-09-04 17:52:53', '2024-09-04 17:52:53', 'uploads/blog_post/blog_66d89e7591eb34.38952605.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `person_name` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `first_name`, `last_name`, `email`, `reason`, `school_name`, `person_name`, `message`, `created_at`) VALUES
(10, 'Blaze', 'Flynn', 'ruxiqe@mailinator.com', 'ParentInquiry', '', 'Aserty78u9i0o-', 'Voluptatem cupiditat', '2024-08-26 05:57:38'),
(11, 'Dacey', 'Christensen', 'nizobi@mailinator.com', 'RequestForATeacher', 'wqertetetetterter', '', 'Qui delectus dolore', '2024-08-26 05:58:58'),
(12, 'Gwendolyn', 'James', 'qiroq@mailinator.com', 'Request for a Teacher', 'erwweerrwerwere', '', 'Ullam facilis conseq', '2024-08-26 06:06:45'),
(13, 'Chaney', 'Sexton', 'licun@mailinator.com', 'Request for a Teacher', 'Chanda Herring', '', 'Impedit in rerum ni', '2024-08-27 18:43:04'),
(14, 'Sylvester', 'Rojas', 'kyhepobyc@mailinator.com', 'Parent Inquiry', '', 'ertyu', 'Nisi aliqua Esse ve', '2024-08-27 18:43:28'),
(15, 'Simone', 'Whitney', 'jywu@mailinator.com', 'Request for a Teacher', '', '', 'Minim quod delectus', '2024-09-03 12:04:29'),
(16, 'Terry', 'D', 'pat@aneesho.com', 'General Enquiry', '', '', 'Do you need help with graphic design - brochures, banners, flyers, advertisements, social media posts, logos etc? \r\n\r\nWe charge a low fixed monthly fee. Let me know if you&#039;re interested and would like to see our portfolio.', '2024-09-09 10:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `description` text,
  `application_deadline` date DEFAULT NULL,
  `posted_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `post_status` enum('Published','Draft') DEFAULT 'Draft',
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `experience` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `salary_range` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `job_location`, `school_name`, `description`, `application_deadline`, `posted_time`, `post_status`, `date_created`, `experience`, `degree`, `job_type`, `company_name`, `contact_email`, `salary_range`) VALUES
(3, 'Teacher of Chemistry', 'Norwood, Beverley HU17 9EX', 'Norwood, Beverley HU17 9EX', '<p>All KS4 students have the opportunity to study Triple Science and we have excellent uptake in A Level Science subjects</p><p>This is an exciting opportunity for a highly skilled, motivated and talented teacher who is eager to inspire and challenge; someone who can encourage a love of Science and Chemistry and has a passion for learning.</p><p>There is an excellent induction programme; outstanding support for ECTs; access to the latest evidence-informed CPD and a wealth of experience within the department.</p><p>We were delighted that in 2021 Ofsted saw what we see every day, fabulous young people working very effectively with our hugely dedicated and highly skilled and knowledgeable staff team.</p><p>We are proud that the regulator recognised the very many achievements of our staff and pupils and particularly their acknowledgement that Beverley High School always puts the interests of pupils first; inspires a love of learning; has a culture of high ambition; and enables pupils to reach their full potential.</p><p>We are justifiably proud of our pupils and staff and look forward to working with someone who wishes to share our vision and contribute to our future successes.</p><p>You can download the application form and associated documents from our school website.</p>', '2024-10-26', '2024-10-04 07:49:25', 'Draft', '2024-10-04 01:49:25', 'Null', 'Null', 'Permanent | Part-time', 'Noble Teachers', 'support@nobleteachers.co.uk', '£27,915 a year'),
(6, 'Teacher of Chemistry', 'Hounslow', 'Heston Community SchoolHounslow', '<p>Heston Community School is a mainstream, co-educational, non-denominational, state-academy, secondary school for children aged 11-19. It is situated in Hounslow in Middlesex and it has 1220 pupils on its roll.</p><p>The school was officially opened by the Charter Mayor in 1932 at a cost of £21,700 and attended by what was described as one of the largest and most representative assemblies which had ever gathered in Heston.</p><p>More recently the Hogarth Building was opened in 2010 and a purpose-built sports facility and a state of the art learning and teaching facility.</p><p><strong>Headteacher</strong></p>', '0000-00-00', '2024-10-05 11:47:04', 'Draft', '2024-10-05 05:47:04', 'Null', 'Null', 'Full Time, Permanent', 'Heston Community SchoolHounslow', 'www.sdosanjh@hestoncs.org', 'MPS/UPS'),
(12, 'Teacher of Science (Physics)', 'South Tyneside', 'Mortimer Community College', '<p><strong style=\"color: rgb(89, 89, 89);\">MORTIMER COMMUNITY COLLEGE</strong></p><p><strong style=\"color: rgb(89, 89, 89);\">Reading Road, South Shields, NE33 4UG</strong></p><p><br></p><p><strong style=\"color: rgb(89, 89, 89);\">Teacher of Science (Physics)</strong></p><p><strong style=\"color: rgb(89, 89, 89);\">Required As Soon As Possible</strong></p><p><strong style=\"color: rgb(89, 89, 89);\">Permanent</strong></p><p><strong style=\"color: rgb(89, 89, 89);\">Full time</strong></p><p><strong style=\"color: rgb(89, 89, 89);\">Mainscale/UPS</strong></p><p><br></p><p><span style=\"color: rgb(89, 89, 89);\">We wish to appoint an inspirational teacher with high aspirations, enthusiasm and a high level of commitment to raising students’ achievements within our Science Faculty. This is an exciting opportunity for an ambitious and innovative teacher who wants to make a real difference to the lives of our students through their passion of teaching Science.</span></p><p><br></p><p><strong style=\"color: rgb(89, 89, 89);\">Can you demonstrate:</strong></p><ul><li>energy, enthusiasm and vision;</li><li>a commitment to improving the lives of young people;</li><li>a willingness to take risks and support innovation;</li><li>innovative teaching and a commitment to sharing good practice;</li><li>the ability to make inclusion a reality for all students;</li><li>a willingness to become immersed in professional learning and embrace the culture of the school?</li></ul><p><br></p><p><span style=\"color: rgb(89, 89, 89);\">If so, Mortimer Community College currently has just the vacancy you are looking for.&nbsp;</span><strong style=\"color: rgb(89, 89, 89);\">We can offer:</strong></p><ul><li>outstanding professional development;</li><li>a school that was recognised nationally in 2020 as being in the top 200 improving and performing schools in the country;</li><li>a school where risk taking in your teaching is encouraged;</li><li>a school where mental health is embraced and is part of the culture of the school;</li><li>a school where students and staff are valued and chasing positions on league tables is not a priority;</li><li>a long-term approach to improvement, focused on life-long learning for all and quality teaching and learning.</li></ul><p><br></p><p><span style=\"color: rgb(89, 89, 89);\">“Staff feel well supported. They are a highly motivated team who are proud to work at the school” Ofsted 2019.</span></p><p><br></p><p><span style=\"color: rgb(89, 89, 89);\">Mortimer Community College, based in the North East of England, is committed to the safeguarding and welfare of children and young people and expects all its employees to share this commitment. The successful applicant will be subject to an enhanced check by the Disclosure &amp; Barring Service (DBS) previously known as the Criminal Records Bureau (CRB).</span></p><p><br></p><p><span style=\"color: rgb(89, 89, 89);\">In line with the guidance in Keeping Children Safe in Education, schools may carry out an online search as part of their due diligence on shortlisted candidates.</span></p><p><br></p><p><strong style=\"color: rgb(89, 89, 89);\">For an application form, please contact:&nbsp;recruitment@mortimer.school</strong></p><p><br></p><p><strong style=\"color: rgb(89, 89, 89);\">Completed application forms to be returned by 12 noon, Monday 14 October 2024</strong></p>', '0000-00-00', '2024-10-05 12:05:33', 'Draft', '2024-10-05 06:05:33', 'Null', 'Null', 'Teaching', 'South Tyneside council', 'www.recruitment@mortimer.school', 'MPS/UPS'),
(13, 'Teacher of Mathematics', 'Stockport', 'Stockport Academy', '<p>This is a fantastic opportunity to join an environment where students’ behaviour is impeccable, where they treat each other and staff with real respect, have a genuine enjoyment of school and enjoy their learning. The Academy is on the road to outstanding and has a relentless drive and determination to ensure the best possible education for students in our care.</p><p>We are looking to recruit outstanding practitioners who are innovative and can inspire students aged 11 – 16 to achieve their full potential and continue their enjoyment of school.</p><p>We are looking for an enthusiastic Teacher of Mathematics. If you feel you have the teaching skills to create a love of Maths in young people, we welcome your application</p>', '0000-00-00', '2024-10-05 12:10:01', 'Draft', '2024-10-05 06:10:01', 'Null', 'Null', 'full time', 'Null', 'www.@null', '£32,400 - £48,000 a year'),
(14, 'University Language Teacher in Spanish', 'Loughborough University', 'Loughborough', '<p>Loughborough University’s Language Centre team of 12 teachers delivers credit-bearing modules and extra-curricular courses to non-specialist students from across the University in French, German, Japanese, Mandarin Chinese and Spanish, from beginner through to degree level. Our dynamic small-group teaching receives high levels of positive feedback from students, and we are always seeking to improve and evolve.</p><p><br></p><p>We are currently looking for a part-time experienced professional educator to join our Spanish team from 27th January 2025.</p><p><br></p><p>Applicants to this post will be native or near native speakers of Spanish with a first-hand experience of at least one Spanish-speaking culture, a solid pedagogical competence, and a commitment to delivering stimulating classes that engage students, actively helping them to achieve positive learning outcomes.</p><p><br></p><p>You should have prior experience of successfully delivering courses in Higher Education and have an excellent capacity to contribute to teamwork, as you will be one of several teachers delivering modules. Ideally, you would have an affinity for teaching beginner courses, which currently form the bulk of this post.</p><p><br></p><p>Most of the work hours for the post are concentrating in term time, with the current post holder teaching 10 hours per week. Our teaching takes place weekly on Tuesdays, Thursdays and Fridays during University semesters (see https://www.lboro.ac.uk/students/welcome/when-you-get-here/term-dates/ ).This can vary depending on the type of duty you are undertaking; patterns of delivery could also change in future. We adjust to childcare timetabling requirements, when it is possible to do so and still fulfil our duty to our students.</p><p><br></p><p>Continuous Professional Development is an essential element of the Language Centre’s ethos, and you need to be able to demonstrate that you have sought out opportunities to update your skills, keep abreast of new developments in teaching, and ideally shared new skills, practices or ideas with colleagues and students.</p><p><br></p><p>For more information refer to the Job Description and Person Specification.</p><p><br></p><p><strong>Informal enquiries</strong>&nbsp;can be made to Dr Yvonne Cornejo, Language Centre Manager, by email at Y.F.Cornejo@lboro.ac.uk.</p><p><br></p><p><strong>Closing date for receipt of applications is</strong>: 23rd October 2024</p><p class=\"ql-align-center\">&amp;nbsp;</p><p><br></p>', '0000-00-00', '2024-10-05 12:14:20', 'Draft', '2024-10-05 06:14:20', 'null', 'null', 'Part time', 'Loughborough University', 'www.@null', '£34,866 a year'),
(15, 'Italian Teacher - Adult Education', 'Bexhill TN40', 'Bexhill college', '<h2><strong>Full job description</strong></h2><p>We are an \'Outstanding\' Sixth Form College which offers a wide range of learning opportunities for students of all ages. Through our adult education provision, we aim to empowering adults through education. We strive to provide high-quality, accessible, and flexible learning opportunities that support personal and professional growth. We are looking for an enthusiastic and compassionate Adult Education Tutor to join our team and help our learners achieve their goals.with examination results.</p><p>We are interested in applications from individuals who can contribute to a wide range of classes both during the day and evening. we are always willing to offer new classes put forward by teachers to see if there is interest. We have a specific requirement for the following areas:</p><ul><li>Italian – Mondays and Tuesdays 6.00-8.00pm</li></ul><p>Many of our courses re-enrol for subsequent terms and therefore, there may be an opportunity for three terms of work.</p><p>We are also interested to hear from anyone who would like to deliver classes – daytime or evening - in our expanding programme.</p><p>The College reserves the right to interview and appoint early if a suitable candidate applies.</p><p>For further information or an application form, please visit our website&nbsp;<strong>www.bexhillcollege.ac.uk&gt;</strong></p><p>There is also a facility to upload a CV with a covering letter<strong>.</strong></p><p>Applications&nbsp;<strong>MUST</strong>&nbsp;be made on our website.</p><p>Penland Road&nbsp;<strong>Bexhill-on-Sea&nbsp;</strong>East Sussex&nbsp;<strong>TN40 2JG</strong></p><p>Job Type: Part-time</p><p>Pay: £18.38 per hour</p><p>Work Location: In person</p><p>Application deadline: 04/10/2024</p>', '0000-00-00', '2024-10-05 12:17:23', 'Draft', '2024-10-05 06:17:23', 'null', 'null', 'part time', 'Bexhill college', 'www.@null', '£18.38 an hour'),
(16, 'Teacher of Spanish', 'Windsor and Maidenhead', 'The Marist SchoolWindsor and Maidenhead', '<h2><strong>Job overview</strong></h2><p>The Marist School seeks a motivated and innovative Teacher of Spanish to join our highly successful Modern Foreign Languages Department on a fixed term basis until August 2025. The successful candidate will join an established and popular department within the school. They will be an inspirational teacher, capable of teaching Spanish to at least GCSE and ideally, to A Level.</p><p>Set in beautiful woodlands in the village of Sunninghill, near Ascot, The Marist School is a leading independent Catholic day school for girls aged 2 to 18. The Marist employs over 130 members of staff and we are proud to be a diverse community that fosters a family spirit across the school.</p><p>This role represents a rare opportunity to join an outstanding department at an exciting time of development at The Marist. The role can be tailored to suit either an ECT or strong graduate seeking their first teaching position, or an experienced teacher looking to develop their experience in a new environment.</p><p>Staff at The Marist School are part of a warm and welcoming community that is at the heart of the school. Our students are academically able, polite and eager to learn, making The Marist a truly outstanding place to work. The school boasts an extensive co-curricular programme, featuring over 100 clubs each week.</p><p><br></p><p>Our staff enjoy a generous pension scheme, allocated on-site parking, free school meals and access to fitness facilities.</p><p><br></p><p>Prospective candidates are invited to contact Jonathon Walker, Assistant Head: Pastoral &amp; Staff Development for an informal conversation about the role:</p><p>jwalker@themarist.com</p><p>Application information is available from the school website:</p><p>https://www.themarist.com/our-school/career-opportunities/</p><p>or contact us directly at The Marist School, Kings Road, Sunninghill, Ascot, Berkshire SL5 7PS, Tel: 01344 624291.</p><p><strong>Completed application forms should be submitted to</strong></p><p><strong>hr@themarist.com</strong></p><p><strong>by 9am on Monday 14th October 2024.</strong></p><p><br></p><p>Applications for this role will be reviewed in the order in which they are received. Suitable candidates may be interviewed before the closing date, and The Marist School reserves the right to withdraw the position if an early appointment is made. Early application is therefore strongly advised.</p><p><br></p><p><em>The Marist School is committed to safeguarding and promoting the welfare of children and applicants must be willing to undergo child protection screening appropriate to the post, including checks with past employers and the Disclosure and Barring Service (DBS). All posts at The Marist are subject to satisfactory statutory employment checks and referencing.</em></p><h2><br></h2><h2><strong>Attached documents</strong></h2><ul><li>Teacher of Spanish 2024-25.pdf</li><li>6.18MB</li></ul><h2><strong>About&nbsp;The Marist School</strong></h2><ul><li><strong>The Marist School</strong></li><li>Kings Road, Sunninghill, Ascot</li><li>Berkshire</li><li>SL5 7PS</li><li>United Kingdom</li></ul><p>+44 1344 624291</p><p>View on Google Maps</p><p>Visit employer website</p><p>Welcome to The Marist School, where our pupils have the opportunity to reach for the stars with their feet firmly on the ground.</p><p>Our down-to-earth and grounded environment serves as the perfect launch pad for our pupils’ success in academic, sports, and personal growth. Our pupils thrive in an environment that encourages risk-taking, where they are not afraid to leave their comfort zones and explore new territories. The Marist School also emphasises human qualities, life skills, and emotional intelligence, ensuring that our pupils are not just academically successful but also well-rounded individuals. As a Catholic school with a clear value system, we welcome all faiths and none, and our pupils are in the driving seat of their education. Join us at The Marist School, where we aim ever higher academically without compromising the kindness that is the heart of our school.</p><p><em>Please note that you are wholly responsible for fact checking in respect of the information provided by schools. Please also check for the latest visa and work permit requirements that may apply. Tes is not responsible for the content of advertisements or the policies adopted by advertising schools. Tes asks that all schools follow&nbsp;Tes\' Fair Recruitment Policy.</em></p><ul><li><strong>Click to go to the following section,</strong></li><li><strong>Job summary</strong></li><li>Click to go to the following section,</li><li>Job overview</li><li>Click to go to the following section,</li><li>Attached documents</li><li>Click to go to the following section,</li><li>About the school</li></ul><p><strong>Save job</strong></p><p><strong>Apply</strong></p><p class=\"ql-align-center\"><br></p><p><br></p>', '0000-00-00', '2024-10-05 12:21:34', 'Draft', '2024-10-05 06:21:34', 'null', 'null', 'part-time, fixed tije', '', '', 'Competitive'),
(17, 'Teacher of German', 'Kingston upon Thames', 'Surbiton High School', '<p>Surbiton High School is seeking an enthusiastic and dedicated Teacher of German to join our thriving Modern Foreign Languages Department. You will inspire and engage pupils in their German studies, from Year 7 through to A-level, and contribute to the wider success of the department.</p><p><br></p><p>German is taught from Year 7 through to A-level, with strong pupil uptake at both GCSE and A-level. Our vibrant and enthusiastic Modern Foreign Languages Department also offers exciting trips to Barcelona, Rhineland, Provence, and Paris, and benefits from a native-speaker German Language Assistant. Pupils begin learning German, French, Spanish, and Latin in Year 7, and choose two languages to focus on in greater depth from Year 8. Studying a language is a core part of the GCSE curriculum.</p><p><br></p><p>As part of our dedicated team, you will join a school where languages are flourishing and European Week of Languages is celebrated with engaging activities, including the much-loved French, German, and Spanish breakfast.</p><p><br></p><p><strong><em>Please refer to the Job Description and Person Specification for further details.</em></strong></p><p><br></p><p>Apply today to be a part of our dynamic and supportive community at Surbiton High School.</p><p><br></p><p><em>Surbiton High School holds a Skilled Worker sponsorship licence and, subject to all the relevant legal requirements being met, we would be willing to consider sponsorship for the successful candidate.</em></p><p><br></p><p><em>Surbiton High School is culturally diverse and fully committed to celebrating and respecting inclusion and diversity throughout our community.</em></p><p><br></p><p><em>Surbiton High School is committed to safeguarding and promoting the welfare of children, and applicants must be willing to undergo child protection screening appropriate to the post, including checks with past employers, the Disclosure and Barring Service and online/social media searches.</em></p><p><br></p><p><em>Please note that the School reserves the right to appoint at any stage during the recruitment process.</em></p><p><br></p><p><strong>For any queries relating to the role or your application, please&nbsp;</strong>email recruitment@surbitonhigh.com</p><p><br></p><p><br></p>', '0000-00-00', '2024-10-05 12:27:03', 'Draft', '2024-10-05 06:27:03', 'null', 'null', 'Full time', 'Surbiton High School', 'www.@null', 'Competitive – based on the Surbiton High School Pay Scale'),
(18, 'Teacher of French', 'Northumberland Ashington', 'Duke\'s Secondary SchoolAshington, Northumberland Ashington', '<h2><strong>Job overview</strong></h2><p>The Northumberland Church of England Academy is a Multi Academy Trust that strives to provide a supportive, diverse and inclusive learning environment for staff and students.</p><p>Are you an inspirational French teacher who is looking for an opportunity to work in an exciting and innovative department within a collaborative and ambitious school?</p><p>If so, this is an excellent opportunity for you to join Duke\'s Secondary School which is a forward-looking Church of England secondary school in South-East Northumberland, where you will be supported to develop your career at the same time as making a difference to the lives of our pupils and community.</p><p>You will make a great addition to the team if you are committed to delivering the best teaching, learning and assessment opportunities for our students and are capable of inspiring and motivating others through your passion for French.</p><h2><strong>Main Roles and Responsibilities:</strong></h2><ul><li>Supervise and support the pupils in their access to learning.</li><li>Plan and carry out engaging lessons that support the curriculum and allow the students to develop their skills.</li><li>Participate in the development of the curriculum, assessment plan and teaching materials in line with school and departmental policies.</li><li>Build relationships with students, staff and parents/carers in order to ensure the students have effective support.</li><li>Safeguard and promote the welfare of children at all times.</li></ul><h2><strong>Our Benefits:</strong></h2><ul><li>Teachers\' Pension Scheme</li><li>Employee Assistance Programme – free 24/7 health and wellbeing support for all members of staff within the Trust</li><li>Free Parking</li><li>Enhanced maternity leave</li><li>Cycle to Work Scheme</li><li>The Nest – Childcare provision</li></ul><p><br></p><p>If you are looking for a new role where you can develop your own skills whilst helping others do the same, then consider joining Duke\'s Secondary School!</p><p>NCEAT is committed to safeguarding and promoting the welfare of children and young people and expects all staff and volunteers to share this commitment. All posts are subject to pre-employment checks, references will be sought and successful candidates will be subject to an enhanced DBS check.</p><h2><strong>Attached documents</strong></h2><ul><li>Other document</li><li>213.57KB</li><li>Other document</li><li>289.83KB</li><li>Other document</li><li>37.46KB</li><li>Job Description</li><li>516.92KB</li></ul><h2><strong>About&nbsp;Duke\'s Secondary School</strong></h2><ul><li><strong>Duke\'s Secondary School</strong></li><li>Academy Road, Ashington</li><li>Northumberland</li><li>NE63 9FZ</li><li>United Kingdom</li></ul><p>+44 1670 816111</p><p>View on Google Maps</p><p>Visit employer website</p><p>Duke’s Secondary School, a part of the NCEA Trust, is an 11 to 19 academy based in Ashington, around 15 miles to the north of Newcastle upon Tyne. Our pupils come to us from the communities of Ashington, Newbiggin and Lynemouth. Many transition to Duke’s from our partner primary schools, Bishop\'s, Thomas Bewick, James Knott, Grace Darling and William Leech but an increasing number of families choose Duke’s from other schools in the area.</p><p>Duke’s is an exciting place to learn and to develop, and we put a strong emphasis on being the best you can be here – this means working hard, developing great attitudes to learning, and experiencing as many different activities and opportunities as you can</p><p>We are a Church of England Academy, and as such we are motivated by our belief that every child is made in the likeness of God, and if nurtured, encouraged, challenged, and sometimes chastened, that child will flourish and their light will shine.</p><p>The school plays an active role in our communities and we encourage our pupils and staff to get involved in making the place we live and learn an even better place. We believe that success is different for every child and every staff member, and we encourage achievement in a wide range of outcomes: academic, vocational, sporting, music, drama, science and technology.</p><p>We value the curriculum outside of the classroom – whether that’s staff across all departments dressing up for Shakespeare day to inspire literacy across the curriculum; our Girls Get Set science and engineering club; rail club; or the many local, national and international trips and visits that expand our pupils’ horizons.</p><p>Most importantly, we want our children to enjoy their education; to learn well and to aspire to being the very best people they, and by extension, we can be.</p><p>We look forward to welcoming you to our school and hope that you will find it a warm, inviting and ambitious environment.</p><p><em>Please note that you are wholly responsible for fact checking in respect of the information provided by schools. Please also check for the latest visa and work permit requirements that may apply. Tes is not responsible for the content of advertisements or the policies adopted by advertising schools. Tes asks that all schools follow&nbsp;Tes\' Fair Recruitment Policy.</em></p><ul><li><strong>Click to go to the following section,</strong></li><li><strong>Job summary</strong></li><li>Click to go to the following section,</li><li>Job overview</li><li>Click to go to the following section,</li><li>Attached documents</li><li>Click to go to the following section,</li><li>About the school</li></ul><p><strong>Save job</strong></p><p><strong>Quick apply</strong></p><p class=\"ql-align-center\"><br></p><p><strong>Report job</strong></p><p><br></p>', '0000-00-00', '2024-10-05 12:32:36', 'Draft', '2024-10-05 06:32:36', 'null', 'null', 'Permanent, Full-time', 'Duke\'s Secondary SchoolAshington', 'www.@null', '£30,000 - £46,525 a year'),
(19, 'Teacher of Modern Foreign Languages (Spanish, French or German)', 'Bracknell Forest', 'Garth Hill CollegeBracknell Forest', '<h2><strong>Job overview</strong></h2><p><strong>Are you a talented educator with a big heart who shares our commitment to excellence and achieving the very best for all our pupils?</strong></p><p>We are looking for an enthusiastic, dedicated and committed teacher to appoint to the post of Teacher of MFL with effect from January 2025. We welcome applications from candidates who are able to teach Spanish, French or German. There may also be an opportunity to provide support to our EAL pupils.</p><p>Garth Hill is a friendly and supportive school with a strong team ethos, excellent facilities and an exceptional professional development programme with great opportunities for further career development.</p><ul><li>Four period day with 75 minute lessons.</li><li>Highly effective behaviour and inclusion system with ‘send out’ and support.</li><li>Centralised detentions to reduce teacher workload.</li><li>Superb CPD including from our outstanding ‘T eaching and Learning Team’.</li><li>OFSTED ‘good’ (May 2019).</li><li>Friendly and supportive working environment.</li><li>On-site gym with rowing machines, cross trainer, spin bikes and free weights.</li></ul><p>Garth Hill College is a happy and vibrant place of learning. We are proud to be a genuinely comprehensive school and offer a wide and diverse range of excellent opportunities, inside and outside the classroom, that we believe enable our young people to develop exceptionally well both academically and personally.</p><p><strong>Should you have any queries please contact Ms S Barnes at the College on</strong></p><p>s-barnes@garthhillcollege.com</p><p><strong>or 01344 421122</strong>.</p><p>Only applications submitted on the official application form will be considered.</p><p><strong>Closing date for receipt of applications: 9am, Wednesday 9 October 2024</strong></p><p><em>Garth Hill College is committed to safeguarding and promoting the welfare of children/young people and expects all employees, workers and volunteers to share this commitment. We will ensure that all our recruitment and selection practices share this commitment.</em></p><p><em>This position requires an Enhanced Disclosure and Barring Service check because it involves contact with (or access to data concerning) children/young people/adults at risk. You will need to tell us about any spent convictions or cautions, which may later appear on your DBS Certificate.</em></p><h2><strong>Attached documents</strong></h2><ul><li>Transmittal Letter MFL.pdf</li><li>243.18KB</li><li>Person specification</li><li>103.73KB</li><li>Job Description</li><li>80.89KB</li><li>School prospectus</li><li>5.16MB</li></ul><h2><strong>About&nbsp;Garth Hill College</strong></h2><ul><li><strong>Garth Hill College</strong></li><li>Bull Lane, Bracknell</li><li>Berkshire</li><li>RG42 2AD</li><li>United Kingdom</li></ul><p>+44 1344 421122</p><p>View on Google Maps</p><p>Visit employer website</p><p><em>Please note that you are wholly responsible for fact checking in respect of the information provided by schools. Please also check for the latest visa and work permit requirements that may apply. Tes is not responsible for the content of advertisements or the policies adopted by advertising schools. Tes asks that all schools follow&nbsp;Tes\' Fair Recruitment Policy.</em></p><ul><li><strong>Click to go to the following section,</strong></li><li><strong>Job summary</strong></li><li>Click to go to the following section,</li><li>Job overview</li><li>Click to go to the following section,</li><li>Attached documents</li><li>Click to go to the following section,</li><li>About the school</li></ul><p><strong>Save job</strong></p><p><strong>Apply</strong></p><p class=\"ql-align-center\"><br></p><p><strong>Report job</strong></p><p><br></p><p><br></p><p><br></p>', '0000-00-00', '2024-10-05 12:35:49', 'Draft', '2024-10-05 06:35:49', 'null', 'null', 'Permanent, Full-time', 'Garth Hill CollegeBracknell Forest', 'www.@null', 'MPS (Fringe)');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `cover_letter` varchar(255) DEFAULT NULL,
  `additional_info` text,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zipcode` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_location` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `description` text,
  `application_deadline` date DEFAULT NULL,
  `posted_time` timestamp NULL DEFAULT NULL,
  `post_status` varchar(20) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `experience` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `job_type` varchar(100) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `salary_range` varchar(50) DEFAULT NULL,
  `rejection_reason` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `user_id`, `job_id`, `name`, `email`, `phone`, `location`, `resume`, `cover_letter`, `additional_info`, `country`, `state`, `city`, `zipcode`, `status`, `job_title`, `job_location`, `school_name`, `description`, `application_deadline`, `posted_time`, `post_status`, `date_created`, `experience`, `degree`, `job_type`, `company_name`, `contact_email`, `salary_range`, `rejection_reason`) VALUES
(9, 28, 40, 'Charde Molina', 'jyka@mailinator.com', '+41 (884) 877-1808', 'Earum quia nobis ab ', 'uploads/resumes/escrow.com on behalf of Jatinderpal Brar.pdf', 'uploads/cover_letters/escrow.com on behalf of Jatinderpal Brar.pdf', 'Qui incidunt quisqu', 'CH', 'Canton of St. Gallen', 'Dolor nihil aliquip ', '20441', 'Approved', 'Veniam vero irure d', 'Sed sit aperiam omn', 'Angelica Noble', '&lt;p&gt;Error totam modi ab .&lt;/p&gt;', '1997-09-20', '2024-09-03 08:31:23', 'Draft', '2024-09-03 08:31:23', 'Veritatis iure cupid', 'Elit sed amet quas', 'Voluptatem ea saepe', 'Cunningham and Hensley LLC', 'diwepyv@mailinator.com', 'Rem qui veritatis co', 'jhkgf');

-- --------------------------------------------------------

--
-- Table structure for table `job_comments`
--

CREATE TABLE `job_comments` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `report_reason` varchar(50) NOT NULL,
  `additional_info` text,
  `date_reported` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `noble_teachers`
--

CREATE TABLE `noble_teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `location` text NOT NULL,
  `status` varchar(20) DEFAULT 'active',
  `date_registered` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `subscribed_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_setup`
--

CREATE TABLE `system_setup` (
  `id` int(11) NOT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `meta_keywords` text,
  `meta_desc` text,
  `meta_author` varchar(255) DEFAULT NULL,
  `theme_color` varchar(7) DEFAULT NULL,
  `company_phone` varchar(20) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_address` text,
  `gmail_account` varchar(255) DEFAULT NULL,
  `gmail_password` varchar(255) DEFAULT NULL,
  `reply_to_address` varchar(255) DEFAULT NULL,
  `pagination_number` int(11) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `site_url` varchar(255) DEFAULT NULL,
  `account_url` varchar(255) DEFAULT NULL,
  `multiple_jobs` enum('yes','no') DEFAULT 'yes',
  `same_cv` enum('yes','no') DEFAULT 'yes',
  `allow_feedback` enum('yes','no') DEFAULT 'yes',
  `mentainace_mode` enum('yes','no') DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_setup`
--

INSERT INTO `system_setup` (`id`, `site_title`, `meta_keywords`, `meta_desc`, `meta_author`, `theme_color`, `company_phone`, `company_email`, `company_address`, `gmail_account`, `gmail_password`, `reply_to_address`, `pagination_number`, `logo`, `favicon`, `site_url`, `account_url`, `multiple_jobs`, `same_cv`, `allow_feedback`, `mentainace_mode`, `created_at`) VALUES
(1, 'Noble Teachers', 'Noble Teachers teaching agency, Education recruitment organisation, Noble Teachers, Teacher job placements Noble Teachers, Schools teaching staff recruitment Noble Teachers, Connect with teachers Noble Teachers, Noble Teachers, Science teachers, Languages,  Special Education Needs and Disabilities, Employment opportunities, Hire teachers Noble Teachers, Noble Teachers education consultancy, Teacher vacancies Noble Teachers, Noble Teachers UK, Supply teachers,  private tuition.', 'Noble Teachers is dedicated to supporting schools, teachers, and parents by providing comprehensive staffing solutions and personalized educational services to all types of learners.', 'BuildNet Technologies', '#2c7a7b', '+44(0)1603986749', 'support@nobleteachers.com', 'St George’s works, 51 Colegate, Norwich NR3 1DD, United Kingdom', 'rudakromkyes@gmail.com', 'Virot1992', 'support@nobleteachers.com', 9, '', '', 'https://nobleteachers.co.uk/', 'https://endpoint46876382097343.nobleteachers.co.uk/', 'no', 'yes', 'yes', 'no', '2024-08-29 05:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `support_pin` varchar(50) DEFAULT NULL,
  `verification_code` varchar(32) DEFAULT NULL,
  `email_verified` varchar(1) DEFAULT NULL,
  `profile_updated` tinyint(1) DEFAULT '0',
  `user_type` varchar(20) DEFAULT NULL,
  `user_ip_address` varchar(45) DEFAULT NULL,
  `browser_data` text,
  `date_in` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_visit` datetime DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_token_expiration` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `support_pin`, `verification_code`, `email_verified`, `profile_updated`, `user_type`, `user_ip_address`, `browser_data`, `date_in`, `last_visit`, `reset_token`, `reset_token_expiration`) VALUES
(28, 'Charde Molina', 'jyka@mailinator.com', '$2y$10$jMVwyIIyK/S.aakLHuBTYuj2dSbm4yWrSbmPoRR3WwWxP.Imi.unu', 'W9802E', 'EAKU', '1', 1, 'admin', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-08-27 19:07:09', '2024-09-02 07:59:13', NULL, NULL),
(29, 'Samuel Peter', 'samuelpeter205@gmail.com', '$2y$10$g9MzYk95svHT.XnQr1qbwOJQErHG3pqm6uK1NbXVUBc2szBE5/AbW', 'E9J7C0', '0JVE', '1', 1, 'admin', '105.116.1.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', '2024-08-30 16:55:39', '2024-11-02 06:08:49', NULL, NULL),
(30, 'Sylvia Ferdinand', 'sylviaferdinand@gmail.com', '$2y$10$Yx6ins.Y31KU4JLDeCs8BeOw0lit6MlGq.zzMk59d8HAlB.YdXA2S', 'N1TDKG', 'NSPT', '1', 1, 'admin', '102.90.42.182', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-08-30 17:09:04', '2024-08-30 18:23:37', NULL, NULL),
(31, 'Otto Carroll', 'hamyb@mailinator.com', '$2y$10$iw9XaHn9EhErvnsvDvszLOWn97jp0QibIYDpgAthreovNPd7T32SG', '6O3J7K', NULL, '0', 0, 'user', '102.90.65.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-08-31 05:31:00', '2024-08-31 05:31:00', NULL, NULL),
(32, 'qixeby rghrtyrty', 'banys@mailinator.com', '$2y$10$QoHb951dDdKGjy5VyixEYOjGLpwxWKt6AEhLFbyx2JC4YabljIcoi', '209641', NULL, '0', 0, 'user', '102.90.65.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-08-31 06:17:40', '2024-08-31 06:17:40', NULL, NULL),
(33, 'rylikij gdfgdfg', 'rupave@mailinator.com', '$2y$10$KywRm4dGKQ.X1y.f9QKZiepvuXA1PGN4vQzw1nzm8tjIlyFAQxpUq', '962893', NULL, '0', 0, 'user', '102.90.65.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-08-31 06:23:33', '2024-08-31 06:23:33', NULL, NULL),
(34, 'pyqybeje', 'cedu@mailinator.com', '$2y$10$Ic4kTTp5/2InDqtoERt52u2U.8Zx8.33wDGo6dQBJy0Q.7jJ7zuiu', '5201a7', NULL, '0', 0, 'user', '102.90.65.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-08-31 06:52:35', '2024-08-31 06:52:35', NULL, NULL),
(35, 'Dorothy Peck', 'jevitetako@mailinator.com', '$2y$10$snSVTOSv8w9pKuv5V5VDJOyRaPmEcS6hWsPG34QikJcNK2T4L2/aG', '9e8d23', NULL, '0', 0, 'user', '102.90.65.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-08-31 06:54:35', '2024-08-31 06:54:35', NULL, NULL),
(36, 'zugiwe', 'gukonipuhi@mailinator.com', '$2y$10$/mmdRwf0F6i2ebIRcTPRUuQFksF3dr4P0SQhmaI9Tyv81cD6Sk5eq', 'e990ec', NULL, '0', 0, 'user', '102.90.65.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-08-31 07:00:09', '2024-08-31 07:00:09', NULL, NULL),
(37, 'sopim', 'mipadakete@mailinator.com', '$2y$10$NYH8boOBKBKzhieOxzPIIulzwE29v0VPmTQMNBdsT5mX6TTrU8T5q', 'bd0e25', NULL, '0', 0, '0', '102.90.65.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-08-31 07:16:30', '2024-08-31 07:16:30', NULL, NULL),
(38, 'suxufopy gfgdgdfg', 'gacutavote@mailinator.com', '$2y$10$3wqCUbd3FXrRIT9fgMWE/O38KIgRzZnAaAjdQF48lbnHcgshVJpq2', '5be7ba', NULL, '0', 0, '0', '102.90.65.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-08-31 07:23:22', '2024-08-31 07:23:22', NULL, NULL),
(39, 'Samuel Peter', 'pega@mailinator.com', '$2y$10$TLUIVeGOU2Vn7r66qEzemOIfpBrU0SdVBo2.knneBRGRL/j0cWDNO', 'ea58c9', NULL, '0', 0, '0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-02 04:42:04', '2024-09-02 04:42:04', NULL, NULL),
(40, 'Zahir Fitzpatrick', 'jemupiv@mailinator.com', '$2y$10$KBlTIli/y6IA9G2eMhQple4g3faymHA6hqUxn0TkPXVNwyOUTo6kC', 'a8993a', NULL, '0', 0, '0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-02 07:11:34', '2024-09-02 07:11:34', NULL, NULL),
(41, 'Jolie Peck', 'fyfoze@mailinator.com', '$2y$10$0RmoVLHw9wzZ/wmE4T8tTuz.Lo.kT2nbD9USDTV2X8qi/af/jnn7e', '476bc7', NULL, '0', 0, '0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-02 07:12:23', '2024-09-02 07:12:23', NULL, NULL),
(42, 'Maryam Mccarthy', 'gejodoj@mailinator.com', '$2y$10$.gHetCF4BNizwlpI5tDwuOp9xKck/v6DEDC6WR0/VG1KMk6546lkS', '095251', NULL, '0', 0, '0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-02 07:12:47', '2024-09-02 07:12:47', NULL, NULL),
(43, 'Hiram Sullivan', 'bygile@mailinator.com', '$2y$10$4S8nDmCKhrjYDkDsKFKZEuMCCnkpG89OXD.GRMTGOcUi/bx5aaHTq', '84343c', NULL, '0', 0, '0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-02 07:14:33', '2024-09-02 07:14:33', NULL, NULL),
(44, 'basyluje jvhjhghj', 'nagave@mailinator.com', '$2y$10$i51SpaM9CS5dPsr/98Ghiu3jdVywDmCaodCBTdj16rhYKD.S8k9di', 'd726ee', NULL, '0', 0, '0', '191.101.209.26', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-04 07:30:21', '2024-09-04 07:30:21', NULL, NULL),
(45, 'Dorothy Peck', 'michaeldavidb123@gmail.com', '$2y$10$9k5pDfSWuc6nOsllxktnDeUgDqx16vqW1WaczTmBY8Tqyq04a9Sr2', 'c38172', NULL, '0', 0, '0', '102.129.235.127', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-04 07:37:26', '2024-09-04 07:37:26', NULL, NULL),
(46, 'Dr.  Rhoda Beskeni', 'rudakromkyes@gmail.com', '$2y$10$QeSHpsea75BkXHQF3hA0X.yBYalkWrRNq1Zqpu4ySvsHJcbZBRtZ6', '59d3c9', NULL, '1', 1, 'admin', '81.110.88.213', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '2024-10-07 07:09:38', '2024-11-19 16:36:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review_details` text NOT NULL,
  `submitted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `rating` int(11) NOT NULL,
  `posted_by` varchar(20) NOT NULL,
  `post_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reviews`
--

INSERT INTO `user_reviews` (`id`, `first_name`, `last_name`, `email`, `review_details`, `submitted_at`, `rating`, `posted_by`, `post_status`) VALUES
(48, 'Jessica', 'F', 'jessicaforetts758@gmail.com', 'As a teacher looking for a new position, Noble Teachers made the entire process so simple. I’m now happily teaching in a school that values my expertise, and I couldn’t have done it without them!', '2024-09-05 15:03:35', 5, 'admin', 'approved'),
(49, 'Paul', 'Roberts', 'paulrobertss3789@gmail.com', 'Our school was facing staffing challenges, but Noble Teachers quickly provided us with qualified and experienced educators. Their ability to understand our specific needs made a huge difference. We now rely on them for all of our recruitment.', '2024-09-05 15:05:20', 5, 'admin', 'approved'),
(50, 'Emma', 'Smith', 'emmasmith890_@gmail.com', 'I needed a private tutor for my child and was unsure where to begin. Noble Teachers connected us with a fantastic tutor who has not only helped my child improve academically but has also made learning fun and engaging.', '2024-09-05 15:06:31', 5, 'admin', 'approved'),
(51, 'Oliver', 'Jones', 'oliverajones99@gmail.com', 'As a new teacher, I have been having problems securing a job but thankfully i came across Noble Teachers through a friend. Barely a month later, i secured a position at a school I love. Thank you Noble Teachers.', '2024-09-05 15:07:41', 4, 'admin', 'approved'),
(52, 'Rachel', 'Lewis', 'rachellewis7#@gmail.com', 'We were urgently in need of temporary staff due to unexpected absences, and Noble Teachers came through. They provided experienced teachers to fill this position. It was such a relief to know we could count on them in a pinch.', '2024-09-05 15:08:58', 5, 'admin', 'approved'),
(53, 'John', 'Martins', 'johnmartinsbennett66@gmail.com', 'When I was searching for a tutor for my daughter, Noble Teachers was recommended to me. The process was so easy, and they found a tutor who has been incredible in helping her excel in her studies. I highly recommend their service to any parent.', '2024-09-05 15:10:10', 5, 'admin', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_comments`
--
ALTER TABLE `job_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `noble_teachers`
--
ALTER TABLE `noble_teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`user_email`);

--
-- Indexes for table `system_setup`
--
ALTER TABLE `system_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_address` (`email`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job_comments`
--
ALTER TABLE `job_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `noble_teachers`
--
ALTER TABLE `noble_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `system_setup`
--
ALTER TABLE `system_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_comments`
--
ALTER TABLE `job_comments`
  ADD CONSTRAINT `job_comments_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
