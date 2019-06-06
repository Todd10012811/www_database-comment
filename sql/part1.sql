use containerdb;
drop table AppointmentRequest
use containerdb;
drop table ContactForm
use containerdb;
drop table Content
use containerdb;
drop table Images
use containerdb;
drop table Comments
use containerdb;
drop table Products

use containerdb;
create TABLE AppointmentRequest (
  name VARCHAR(30) NOT NULL,
  Phone Varchar(30)NOT NULL,
  Address varchar(100)NOT NULL,
  TimeRequested varchar(30)NOT NULL
  );

use containerdb;
create TABLE ContactForm (

  FName VARCHAR(30),
  Lname Varchar(30),
  Email varchar(100),
  Phone varchar(30)
  

	
);
use containerdb;
CREATE TABLE Content (
  IDN varchar(10) ,
  Properties TEXT,
  Something VARCHAR(20),
  PRIMARY KEY (IDN)
	
);
use containerdb;
CREATE TABLE Images (
  Indx VARCHAR(10),
  Prop TEXT
	
);

use containerdb;
create TABLE Comments (
  Indx int not null AUTO_INCREMENT,
  Prop TEXT,
  FName varchar(30),
  TDate varchar (15),
  Approval int (15),
  PRIMARY KEY (Indx)
	
);
use containerdb;
CREATE TABLE Products
(
ID int NOT NULL AUTO_INCREMENT,
pname varchar(255) NOT NULL,
discription varchar(2000),
pimage varchar(255),
price varchar(255),
brand varchar(255),
rating varchar(255),
PRIMARY KEY (ID)
)

use containerdb;
INSERT INTO AppointmentRequest
    (name, Address, TimeRequested, Phone) 
VALUES 
   ("Johnny Hobson", "12 hepburn street", "12/4/2019 @ 10am", "0222765451"),
('Sarah Makkie', '86 dignan drive', '12/4/2019 @ 11am', '0214569493'),
('Lawrence Hunt', '8 curtan terracee', '13/4/2019 @ 2pm', '0276664443'),
('Mike Oxlong', '45 bupkin street', '16/5/2019 @ 1pm', '0211599873'),
('Jerry Canister', '875 great south road', '13/4/2019 @3pm', '0223164971'),
('Dick Winters', '23 sunny drive', '12/4/2019 @ 4pm', '0278156432');


use containerdb;
INSERT INTO ContactForm 
    (FName, Lname, Email, Phone) 
VALUES 
('James', 'Hawkins', 'JamesThompson@gmail.com', '02145678933'),
('Eddie', 'Thompson', 'EddieVedder@hotmail.com', '0278963541'),
('Jody', 'Jefferson', 'Jodie1234@gmail.com', '02245678912'),
('Lesley', 'Jackson', 'jackson5746@xtra.co.nz', '02715975346'),
('Bob', 'Royal', 'RoyalShinizzle@hotmail.com', '0226517954'),
('Brooke', 'Peterson', 'Chooky2019@gmail.com', '0278156432');

use containerdb;
INSERT INTO Content
    (Something, Properties, IDN)
VALUES 
('Heading', 'Main Article Content', '001'),
('Paragraph', 'The purpose of this website is to replicate the website design from assignment 1. This websites is driven by a multi teired system called MVC which stands for model view controller. The content in this website is database driven through MVC an implimented through means of php, html, css, javascript, and SQL. The way MVC works is simple which is described in laymans terms. The user interacts with the Controller making requests such as pressing on links or nav buttons. The Controller contacts the Model with the users request. The Model then retrives and manipulates data from the Database and returns the data to the Controller. The Controller then delivers the data to the view.The View then displays the data in human readible form. For more infromation on MVC <a href="https://moodle.toiohomai.ac.nz/course/view.php?id=1776">Click Here.</a>    ', '002'),
('Heading', 'Location', '003'),
('Paragraph', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni', '004'),
('Heading', 'Upgrade', '005'),
('Heading', 'Clean Up', '006'),
('Heading', 'Maintainance', '007'),
('Paragraph', '240 Gigabyte Solid State Drive<br>16 Gigabytes of Ram<br>Fresh Windows 10 Install', '008'),
('Paragraph', 'Fresh Windows Install<br>Disk Cleanup<br>Windows Optomisation', '009'),
('Paragraph', 'Regular Cleanup<br>Disk Defragmentation<br>Clean Regristry', '010'),
('Heading', 'Products', '011'),
('Paragraph', 'ThinkCentre M920 SFF<br>$1599', '012'),
('Heading', 'Maintainance', '013'),
('Heading', 'Clean Up', '015'),
('Heading', 'Upgrade', '016'),
('Heading', '240 Gigabyte Solid State Drive16 Gigabytes of RamFresh Windows 10 Install', '017'),
('Paragraph', 'Regular CleanupDisk DefragmentationClean Regristry', '018'),
('Paragraph', 'Fresh Windows InstallDisk CleanupWindows Optomisation', '019'),
('Paragraph', 'Advice And FAQ', '020'),
('Heading', 'Adipiscing bibendum est ultricies integer. Iaculis urna id volutpat lacus laoreet non curabitur. Nunc congue nisi vitae suscipit tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. Nulla facilisi cras fermentum odio. Placerat vestibulum lectus mauris ultrices. Pretium viverra suspendisse potenti nullam ac. Ac odio tempor orci dapibus ultrices in iaculis. Vitae turpis massa sed elementum tempus egestas. Semper risus in hendrerit gravida rutrum quisque non tellus. Mattis nunc sed blandit libero volutpat. Cras pulvinar mattis nunc sed. Fermentum leo vel orci porta non pulvinar neque. Eleifend donec pretium vulputate sapien. Dolor sit amet consectetur adipiscing.', '021'),
('Paragraph', 'Leave a comment:', '022'),
('Heading', 'Legislation 1', '023'),
('Heading', 'Mporro tenetur quisquam aperiam sed ut consequuntur nesciunt earum labore quo culpa facere nemo laboriosam ex minus hic dolore, fuga cupiditate corporis quis officiis. Voluptatibus omnis expedita, soluta ipsam itaque, eos placeat excepturi enim ipsa id voluptate. Consequatur, unde qui voluptatibus, in impedit iure officiis officia sint totam libero aspernatur corporis blanditiis sunt enim reiciendis magni molestiae cum neque consequuntur deleniti? Sint, voluptate. Quibusdam maiores aut corporis incidunt sequi facilis inventore, odit et dolores id aliquam quam veniam, sint eaque. Ea quisquam fugit facere illo aut, aliquid et quae vel velit labore quidem distinctio sit eligendi magnam facilis nulla ipsam unde, sunt laudantium dolorem laboriosam eaque? Dicta minus labore pariatur iste ad dolores nesciunt architecto consequatur? Doloribus, iure perspiciatis. Impedit consequatur placeat eveniet maxime reiciendis accusamus ab, ratione quibusdam ut consequuntur magni reprehenderit at neque, mollitia et architecto sequi, minima tempore inventore! Porro quidem perferendis aliquid quos beatae quaerat commodi eum ab molestiae, dicta distinctio placeat laborum tempore voluptatibus dignissimos delectus dolore velit blanditiis quo illo. Nihil cupiditate itaque provident facilis esse! Nesciunt, perferendis beatae! Incidunt consectetur adipisci a eos sequi distinctio, omnis unde tempora! Nostrum laborum deserunt, at ipsa quia dignissimos repellendus voluptatum facilis ipsum.', '024'),
('Heading', 'Legislation 2', '025'),
('Paragraph', 'Deleniti laboriosam fugiat et perspiciatis iusto minus, modi quae odit fuga harum exercitationem nemo rerum neque reprehenderit dolores, fugit maxime cumque, nam sint possimus eius. Earum totam cum minima! Beatae at voluptatum, fugiat tenetur quae, obcaecati repudiandae sapiente porro corrupti odio incidunt totam accusamus! Minus, assumenda iste facere quasi at dolorum dolorem maxime repellendus, ad, odio deleniti. Quis soluta accusamus illum, itaque blanditiis commodi consequuntur deleniti sunt beatae fugit quisquam incidunt hic? Soluta fuga magnam voluptatem magni architecto totam similique laboriosam velit ullam unde ducimus, delectus voluptates sed quisquam modi quam reiciendis provident facere sint autem voluptas facilis. Officia dolorem voluptate veritatis error? Placeat itaque modi quam ipsam reprehenderit cum deserunt vero, impedit accusantium quaerat unde repellat adipisci facere pariatur, libero delectus aperiam maiores quisquam ea quos, provident qui minima? Blanditiis, sed voluptas neque voluptates sit eos eaque provident labore architecto dignissimos omnis, amet illo odio reiciendis, maiores laboriosam totam culpa debitis quibusdam.', '026'),
('Heading', 'Legislation 3', '027'),
('Paragraph', 'Veniam quasi vero quod enim voluptas animi maiores suscipit iusto doloribus, ea a ex eum ipsam accusamus deserunt delectus, sequi dolores? Ipsa, tempore. Est mollitia quae excepturi dolorem repudiandae sit ea iusto minima debitis amet quisquam cum cupiditate in accusamus illum aliquid vero assumenda quos eos dolore dolores corporis, hic voluptate. Dolor error aliquid, non fugiat ex et natus voluptatem dolores, minus cupiditate reiciendis recusandae aut rem sequi magni doloribus omnis eaque. Asperiores deleniti voluptatum, voluptates omnis obcaecati ad veniam nulla ea in consequatur odit modi similique deserunt aut laudantium esse sunt dolorem tempora labore qui excepturi et sequi non incidunt. Corrupti earum, consequatur iure voluptates rerum repellendus nostrum veritatis laboriosam iusto sapiente eveniet a neque accusamus, voluptatem voluptas dicta. Accusantium expedita sed adipisci, recusandae neque voluptatem iste eveniet distinctio porro nesciunt, qui provident ad asperiores iusto, amet a vel quas sunt repudiandae cum? Dolorem maxime quaerat saepe eaque accusantium, voluptas animi deserunt tempore perspiciatis eligendi sequi, natus.', '028'),
('Heading', 'Legislation 4', '029'),
('Paragraph', 'quidem perferendis aliquid quos beatae quaerat commodi eum ab molestiae, dicta distinctio placeat laborum tempore voluptatibus dignissimos delectus dolore velit blanditiis quo illo. Nihil cupiditate itaque provident facilis esse! Nesciunt, perferendis beatae! Incidunt consectetur adipisci a eos sequi distinctio, omnis unde tempora! Nostrum laborum deserunt, at ipsa quia dignissimos repellendus voluptatum facilis ipsum autem inventore debitis neque soluta expedita, architecto, saepe dolore nemo natus ut. Libero illo cumque voluptatem iste eaque, accusamus amet inventore perferendis exercitationem, sit distinctio! Debitis accusantium voluptas numquam laudantium sunt quos assumenda culpa nulla, eligendi delectus. Id expedita quibusdam cum totam quos distinctio iure, optio assumenda doloribus repellendus eveniet officiis velit recusandae ducimus magnam mollitia harum illo explicabo eius est suscipit laboriosam saepe provident eum? Voluptatum earum mollitia repellendus itaque dicta neque, perspiciatis quasi tempora eaque voluptas fugit in ex.', '030'),
('Paragraph', 'Contact Form', '031'),
('Heading', 'If you would like to contact us and stay informed of all the latest and greatist deal and advise that Tech Inspect has to offer please fill in you details in the below form', '032'),
('Heading', 'Appointment Request', '033'),
('Paragraph', 'If you would like to request a service or book an appiontment with our friendly team to talk about fixing one of your computer you can enter your contact details below and one of our team will contact you to make an appointment.', '034'),
('Paragraph', 'CORE i7 9th Gen <br>$1399', '035'),
('Paragraph', 'ASUS ROG Huracan Gaming PC<br>$1999', '036'),
('Heading', 'Legislation', '037')
;
use containerdb;
INSERT INTO Images
    (Indx, Prop)
VALUES 
('0','/images/COMP.jpg'),
('1','https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d19475.134595908825!2d176.16562179213102!3d-37.69583092496607!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snz!4v1553819328728!5m2!1sen!2snz'),
('2','/images/help.jpg'),
('3','/images/img1.jpg'),
('4','/images/img2.jpg'),
('5','/images/img3.jpg');

use containerdb;
INSERT INTO Comments
    (Prop, FName, TDate, Approval)
VALUES 
('culpa facere nemo laboriosam ex minus hic dolore, fuga cupiditate corporis quis officiis. Voluptatibus omnis expedita, soluta ipsam ita','Bob','02-05-16',1),
('iure officiis officia sint totam libero aspernatur corporis blanditiis sunt enim reiciendis magni molestiae cum neque consequuntur deleniti? Sint, voluptate. ','Sam','04-08-17',1),
('id aliquam quam veniam, sint eaque. Ea quisquam fugit facere illo aut, aliquid et quae vel velit labore quidem distinctio sit eligendi magnam facilis nulla ','Woody','21-07-18',1),
('ipsam unde, sunt laudantium dolorem laboriosam eaque? Dicta minus labore pariatur iste ad dolores nesciunt architecto consequatur? Doloribus, iure ','Lesley','13-3-19',1),
('perspiciatis. Impedit consequatur placeat eveniet maxime reiciendis accusamus ab, ratione quibusdam ut consequuntur magni reprehenderit at neque, mollitia et ','Riley','12-4-19',1),
('architecto sequi, minima tempore inventore! Porro quidem perferendis aliquid quos beatae quaerat commodi eum ab molestiae, dicta distinctio placeat laborum ','Jeff','30-5-19',0);

use containerdb;
INSERT INTO Products
    (pname, discription, pimage, price, brand, rating)
VALUES 
('Lenovo V530s SFF','Responsive, reliable, and compact, the V530s desktop is the perfect choice for everyday business. Packed with the latest Intel® Core i processors, DDR4 memory, and high-speed PCIe SSD, this desktop handles multitasking and large files with ease, and will maximise your productivity in no time.','img6.webp','$1,729','Small device, big performance by Lenovo','8/10'),
('Inspiron 24 3000 (AMD)','24-inch all-in-one desktop delivers seamless streaming for video and chats all in one place with Full HD on a wide-angle IPS display with pop-up webcam.','img7.webp','$1298','Stunning to watch. Easy to use.','8/10'),
('Dell Desktop PC','Business-class and future-ready, the Lenovo V530 is a great choice for progressive IT managers looking for reliable, secure desktops. Design details like easy-access USB ports make users lives easier, while powerful Intel processing keeps them productive. Security features like Trusted Platform Module 2.0 provide peace of mind. And built-in tools like Lenovo Vantage make system management a snap.','img2.jpg','$1999','CORE i7 9th Gen','8/10'),
('HP Pavilion','Part entertainment powerhouse and part productivity master, the HP Pavilion 24-R041A All-in-One Desktop is ready for whatever it is you’re into. From the edge-to-edge display to the stunningly modern design, go from streaming your favourite show to learning a new recipe on a PC that looks as great as it performs.','img8.jpg','$1479','Hewlette Packard 24-R041A All-in-One Desktop','5/10'),
('Acer Chromebook','A cheap, portable way to get online with nothing getting in the way, this ultrathin and ultralight HD laptop is super portable making it easy-as to stay connective and productive. This brilliant bit of techno kit has all the bells and whistles you could want, can be easily slipped into almost any bag or case, and is available today at a nano price.','img4.jpg','$199.99','Acer, C720 Dual Core HD 16GB','6/10'),
('MacBook Pro','Don’t wait any longer, join the I Revolution today with this amazingly priced genuine MacBook Pro from Apple. This smart, sassy bit of techy kit packs a real techno-punch when it comes to delivering fantastic user-friendly functionality with thoroughbred speed and finesse, yet still manages to look cooler than the top shelf of Samuel L. Jackson’s freezer.  An apple a day keeps the boredom at bay.','img5.jpg','$999','13" 2.5GHz 1TB HDD','7/10'),
('Huracan 1080PXC','Whether your family is looking to surf, stream or tackle that next big assignment, this expencive gamer friendly machine has been redesigned to give everyone what they need. A splash of color and reliable, trusted performance make this the perfect living room go-to.','img3.jpg','$1999','ASUS ROG Huracan Gaming PC','10/10'),
('ThinkCentre M920 SFF','Minimalist design. Maximum expression: Stunning in any setting, the ThinkCentre M920 SFF All-in One was designed to perfectly blend form and function. Its slim, modern look saves space on your desk, while the camera slide safeguard’s your family’s privacy.','img1.jpg','$1599','By Lenovo, Fast and reliable.','6/10');