use containerdb;


CREATE TABLE AppointmentRequest (
  IDN varchar(10) NOT NULL,
  name VARCHAR(30) NOT NULL,
  Phone Varchar(30)NOT NULL,
  Address varchar(100)NOT NULL,
  TimeRequested varchar(30)NOT NULL,
  FK varchar(10) NOT Null,
  PRIMARY KEY (IDN)
  
  );
  
CREATE TABLE ContactForm (
  IDN varchar(10) NOT NULL,
  Fname VARCHAR(30) NOT NULL,
  LName Varchar(30)NOT NULL,
  Email varchar(100)NOT NULL,
  Phone varchar(30)NOT NULL,
  FK varchar(10) NOT Null,
  PRIMARY KEY (IDN)
	
);

CREATE TABLE Content (
  IDN varchar(10) ,
  Properties TEXT,
  Something VARCHAR(20),
  PRIMARY KEY (IDN)
	
);

CREATE TABLE Images (
  Indx VARCHAR(10),
  Prop TEXT
	
);


CREATE TABLE Comments (
  Indx VARCHAR(10),
  Prop TEXT
	
);


INSERT INTO AppointmentRequest
    (name, Address, TimeRequested, Phone, IDN, FK) 
VALUES 
   ("Johnny Hobson", "12 hepburn street", "12/4/2019 @ 10am", "0222765451","041", "4000"),
('Sarah Makkie', '86 dignan drive', '12/4/2019 @ 11am', '0214569493','042','4000'),
('Lawrence Hunt', '8 curtan terracee', '13/4/2019 @ 2pm', '0276664443','043','4000'),
('Mike Oxlong', '45 bupkin street', '16/5/2019 @ 1pm', '0211599873','044','4000'),
('Jerry Canister', '875 great south road', '13/4/2019 @3pm', '0223164971','045','4000'),
('Dick Winters', '23 sunny drive', '12/4/2019 @ 4pm', '0278156432','046','4000');


INSERT INTO ContactForm 
    (FName, Lname, Email, Phone, IDN, FK) 
VALUES 
('James', 'Hawkins', 'JamesThompson@gmail.com', '02145678933','035','4000'),
('Eddie', 'Thompson', 'EddieVedder@hotmail.com', '0278963541','036','4000'),
('Jody', 'Jefferson', 'Jodie1234@gmail.com', '02245678912','037','4000'),
('Lesley', 'Jackson', 'jackson5746@xtra.co.nz', '02715975346','038','4000'),
('Bob', 'Royal', 'RoyalShinizzle@hotmail.com', '0226517954','039','4000'),
('Brooke', 'Peterson', 'Chooky2019@gmail.com', '0278156432','040','4000');


INSERT INTO Content
    (Something, Properties, IDN)
VALUES 
('Heading', 'Main Article Content', '001'),
('Paragraph', 'dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur', '002'),
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

INSERT INTO Images
    (Indx, Prop)
VALUES 
('0','/images/COMP.jpg'),
('1','https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d19475.134595908825!2d176.16562179213102!3d-37.69583092496607!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snz!4v1553819328728!5m2!1sen!2snz'),
('2','/images/help.jpg'),
('3','/images/img1.jpg'),
('4','/images/img2.jpg'),
('5','/images/img3.jpg');


INSERT INTO Comments
    (Indx, Prop)
VALUES 
('0','gfgdgh'),
('1','gfdgfd'),
('2','fdgfdgfd'),
('3','gfdgfd');

