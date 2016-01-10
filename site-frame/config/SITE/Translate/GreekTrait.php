<?php
namespace Php247\Translate;

/**
 *
 * @author Clement
 *
 */

Trait GreekTrait{
    private static $sGreek = [
        'IT Services' => 'Υπηρεσίες πληροφορικής',
        'We provide specialized IT services tailored to each user' =>
            'Παρέχουμε εξειδικευμένες υπηρεσίες πληροφορικής προσαρμοσμένες προς κάθε χρήστη',
        'Specialized in standalone applications' =>
            'Εξειδίκευση σε αυτόνομες εφαρμογές',
        'Computer Services' => 'Υπηρεσίες H/Y',
        'Software' => 'Εφαρμογές Η/Υ',
        'Hardware' => 'Υλικό Η/Υ',
        'Embedded systems' => 'Ενσωματωμένα συστήματα',
        'Training' => 'εκπαίδευση',
        // Software Activities supported
        'Develop with us your' => 'Κάντε τη δική σου',
        'Website' => 'Ιστοσελίδα',
        'Mobile Application' => 'Εφαρμογή για κινητά',
        'Database systems' => 'Βάση δεδομένων',
        'Enterprise' => 'Επιχείρηση',
        'Staff your enterprise with' => 'Βάλτε στην επιχείρησή σας',
        'Automated billing systems' => 'Αυτοματοποιημένo σύστημα τιμολόγησης',
        'E-mail marketing systems' => 'Μαρκετινγκ με ηλεκτρονικό ταχυδρομείο',
        'Content management' => 'Διαχείρηση περιεχομένου',
        'Customer Relationship Management (CRM)' => 'Διαχείριση Πελατειακών Σχέσεων (ΔΠΣ)',
        'Enterprise Resource Planning (ERP)' => 'Προγραμματισμός Επιχειρηματικών Πόρων (ΠΕΠ)',
        'Business Continuity Planning (BCP)' => 'Προγραμματισμός Επιχειρησιακής Συνοχής (ΠΕΣ)',
        'Financing' => 'Χρηματοοικονομικά ',
        'E-commerce' => 'Ηλεκτρονικό εμπόριο',
        'Sell online by' => 'Πωλήστε on-line κάνοντας',
        'Listing your products' => 'Κυκλοφορησε τα προϊόντα  σας',
        'Payment processing' => 'Σύστημα πληρωμής',
        'Consumers pay-per-download basis' => 'Πληρωμή με βάση κατεβάσματος',
        'Customer profiling' => 'Προφίλ πελάτη',
        'Product management' => 'Διαχείρηση προιόντων',
        'Newsletters' => 'Ενημερωτικά Δελτία',
        'Customer management' => 'Διαχείρηση πελατών',
        'Blogs & Online Diaries' => 'Blogs και online ημερολόγια',
        'Post your news by' => 'Στείλτε τις ειδήσεις σας κάνοντας',
        'Daily journaling' => 'Καθημερινές δημοσίευσης',
        'Automated journal' => 'Αυτοματοποιημένές δημοσίευσεις',
        'Forums' => 'Φόρουμ',
        'Build your online group to' => 'Κάντε online ομάδα για',
        'Share your opinion' => 'Μοίραστε τις απόψεις σας',
        'Online community' => 'Online κοινότητα',
        'Informational' => 'Ενημερωτικά',
        'Share informations by' => 'Μοιράστε τα νέα σας κάνοντας',
        'Bring your newspaper online' => 'Φέρτε την εφημερίδα σας online',
        'Tutorials' => 'Σεμινάρια',
        'Daily video' => 'Καθημερινά video',
        'Social Networking' => 'Κοινωνική διακτύωση',
        'Be social by' => 'Διακτυωθείστε κάνοντας',
        'Publishing yourself to online social network' => 'Διαφημηστείτε σε κοινωνικό δίκτυο',
        'Building application in a online social network' => 'Εφαρμογή σας σε κοινωνικό δίκτυο ',
        'Personal' => 'Online προφιλ',
        'Share personal information with' => 'Μοιράστε τα νεα σας με',
        'Portofolios' => 'Portofolios',
        'Profile' => 'Προφιλ',
        'Create, manage and maintain your Website includes' => 'Δημιουργία, διαχείριση και συντήρηση της ιστοσελίδας σας συμπεριλαμβανομένα',
        'simply, low cost but highest quality' => 'απλά, χαμηλού κόστους αλλά υψηλής ποιότητας',
        'Responsive design (UI,UX)' => 'Δυναμικός σχεδιασμός (UI,UX)',
        'Development' => 'Ανάπτυξη',
        'Web service & RSS' => 'Web service & RSS',
        'SEO integration' => 'Προσαρμογή σε μηχανές αναζήτησης (SEO)',
        'Api integration (Facebook app, paypal, Twitter)' => 'Facebook api, paypal, Twitter',
        'Online Marketing' => 'Online Μαρκετινγκ',
        'CrossPlatform or Native application' => 'CrossPlatform ή Native εφαρμογή',
        'Gaming' => 'Παιχνίδια',
        'Staff your game with' => 'Βάλτε  στο παιχνίδι σας',
        '2D game' => 'Παιχνίδι 2D',
        '3D game' => 'Παιχνίδι 3D',
        'Single user (2D,3D)' => 'Μονό (2D,3D)',
        'Multi users (2D,3D)' => 'Πολλαπλον παιχτών (2D,3D)',
        'Lottery game' => 'Τυχερά παιχνίδια',
        'Directory' => 'Κατάλογος',
        'By' => 'κάνοντας',
        'E-book' => 'Online βιβλιά',
        'Search engine' => 'Μηχανές αναζήτησης',
        'Newspaper' => 'Δημοσίευση',
        'Place geolocator' => 'Γεωγράφημα τοποθεσιών',
        'Mobile e-commerce' => 'Ηλεκτρονικό εμπόριο σε κινητές συσκεύες',
        'Mobile agenda' => 'Ατζέντα σε κινητές συσκεύες',
        'Organise your' => 'Οργάνωστε τα',
        'Personal meeting' => 'Προσωπικές συνεδριάσεις',
        'Team meeting' => 'Ομαδικές συνεδριάσεις',
        'Project management' => 'Διαχείρηση έργου',
        'Billing' => 'Τιμοκατάλογο',
        'Enterprise Application' => 'Εταιρική εφαρμογή',
        'Staff your enterprise mobile application with ' => 'Βάλτε στην επιχείρησή σας εφαρμογή για κινητές συσκεύες κάνοντας',
        'Mobile profile' => 'Προφιλ σε κινητές συσκεύες',
        'Create, manage and maintain your mobile application includes' => 'Δημιουργία, διαχείριση και συντήρηση εφαρμογή για κινητά συμπεριλαμβανομένων',
        'SEM integration' => 'Μηχανές στατιστικής χρήσης (SEM)',
        'Api integration (Facebook app, paypal, Twitter,...)' => 'Facebook app, paypal, Twitter,...',
        'Determining data to be stored' => 'Καθορισμός δεδομένα προς αποθήκευσης',
        'Normalization (3rd)' => 'Κανονικοποίηση (3η)',
        'Determining data type' => 'Καθορισμός τύπου δεδομένων',
        'Entity-Relationship diagram (ERD)' => 'Διάγραμμα Οντοτήτων-Συσχετίσεων (ΔΟΣ)',
        'Implementation' => 'Εγκατάσταση',
        'With' => 'Με',
        'Administration' => 'Διαχείριση',
        'Develop DBA' => 'Ανάπτυξη ΒΔ',
        'Secure' => 'Ασφάλεια ΒΔ',
        'Maintain' => 'Συντήρηση ΒΔ',
        'Optimisation' => 'Βελτιστοποίηση',
        'Query processing' => 'Επεξεργασία ερωτημάτων',
        'Query optimisation' => 'Βελτιστοποίηση ερωτημάτων',
        'Create, manage and maintain your database system includes' => 'Δημιουργία, διαχείριση και συντήρηση του συστήματος βάσης δεδομένων σας συμπεριλαμβανομένα',
        'Design (3nf)' => 'Σχεδιασμός (3κμ)',
        'Development(SQL, PL/SQL, NoSql)' => 'Ανάπτυξη(SQL, PL/SQL, NoSql)',
        'Migrate' => 'Μετεγκατάσταση',
        'Warehouse' => 'Αποθήκη',
        'Store and manage your product with' => 'Αποθηκεύσετε και να διαχειριστείτε το προϊόν σας με',
        'Products registration system' => 'Σύστημα καταχώρισης προϊόντων',
        'Product accounting' => 'λογιστική προϊόντων',
        'Enterprise resource management' => 'Διαχείριση πόρων επιχείρησης',
        'Enterprise resource planning (ERP)' => 'Προγραμματισμός Επιχειρησιακών Πόρων (ΠΕΠ)',
        'Create, manage and maintain your desktop application includes' => 'Δημιουργία, διαχείριση και συντήρηση εφαρμογών γραφείου σας συμπεριλαμβανομένα',
        'Design (UI, UX)' => 'Σχεδιασμός(UI, UX)',
        'Software Maintenance' => 'Συντήρηση λογισμικού',
        'Updating' => 'ενημέρωση πόρων λογισμικού',
        'Upgrading' => 'Αναβάθμηση πόρων λογισμικού',
        'Stay safe by' => 'Μένετε με ασφάλεια κάνοντας',
        'Backing up your entire website' => 'Δημιουργία αντιγράφων ασφαλείας',
        'Monitor Outages' => 'Παρακολούθηση απώλειες',
        'Test speed' => 'Δοκιμή ταχύτητας',
        'Link Check' => 'Έλεγχος συντεσιμότητας',
        'Traffic state' => 'Κατάσταση κυκλοφορίας',
        'New Features and Upgrades' => 'Αναβαθμίσεις με νεά τεχνολογία',
        'Application Porting' => 'Μεταφορά εφαρμογών',
        'Support for New Devices' => 'Υποστήριξη νέων τεχνολογιών και συσκευών',
        'Enterprise App Store Management, Analytics and Reporting' => 'Διαχείριση καταστήματος εφαρμογών Επιχείρισης,ανάλυσης και αναφοράς',
        'Back up' => 'Δημιουργία αντιγράφων ασφαλείας',
        'Integrity Check' => 'Έλεγχος ακεραιότητας',
        'Index Optimise' => 'Βελτιστοποίηση δεικτών ',
        'Statistics' => 'Στατιστικά',
        'Application Migration' => 'Μετεγκατάσταση εφαρμογή',
        'Improve customer satisfaction' => 'Βελτίωση της ικανοποίησης των πελατών',
        'Application re-engineering' => 'Ανασχεδιασμός εφαρμογής ',
        'manage and maintain your software includes' => 'Διαχείριση και συντήρηση του λογισμικού σας συμπεριλαμβανομένα',
        'Change' => 'Αλλαγές',
        'Extend' => 'Επέκταση',
        'simply, low cost but highest quality delivery' => 'Απλά, χαμηλό κόστος, αλλά υψηλότερη ποιότητα παράδοσης',
        'Interested in' => 'Ενδιαφέρομαι για',
        'Budget' => 'Προϋπολογισμός',
        'Thanks for your order!' => 'Ευχαριστούμε για την τοποθέτηση σας.',
        "We'll contact you very soon." => 'Θα επικοινωνήσουμε μαζί σας πολύ σύντομα.',
        'Software project' => 'Έργο λογισμικού',
        'project-software' => '<p> Στη <a href="javascript:void()" dosoft="ds"> DoSoft </a> έργον,χειριζόμαστε
                             στενά το έργο σας όπως εσείς επιθυμείτε.Τοποθέτοντας το έργο σας,
                             εμείς εργαζόμαστε για την οριστικοποίηση κάθε απαίτηση βασιζόμενες
                             στις καθορισμένες απαιτήσεις και τον προϋπολογισμό σας.
                             </p><p> Επίσης, όταν το έργο είναι έτοιμο να ξεκινήσει,
                              θα πρέπει να εξασφαλίσετε 20% του προϋπολογισμού του έργου,
                              που θα φιλοξενηθεί στον πόρο του έργου μέχρι την πρώτη παράδοση της δοκιμής.
                              </p><p>Με άρνηση παράδοσης, και χωρίς αίτηση αλλαγών, το έργο και ο πόρος
                              επανέλθουν αυτόματα.</p>
                              <p>Για περισσότερες πληροφορίες, παρακαλούμε <a href="#contact" dosoft="contact">
                               Επικοινωνήστε μαζί μας </a> ή διαβάστε περισσότερα στη
                              <a id="ds-faq-project" data-doc="faq" class="faq ds-faq-project" href="javascrip:void()" dosoft="faq"> Συχνές ερωτήσεις. </a>                                  
                               <strong> <a href="javascript:void()"dosoft="ds">DoSoft</a>
                                <span dosoft="team" style ="padding: 3px" class="italic pull-left">Συλλογή έργων της ομάδας.</span> </strong>
                                </p>',
        'Name' => 'Όνομα',
        'Company' => 'Επιχείριση ή ιδιώτης',
        'E-mail' => 'Ηλεκτρονικό ταχυδρομείο',
        'Phone' => 'Τηλέφωνο',
        'Expected start date' => 'Προτεινόμενη ημερομηνία έναρξης',
        'Expected finish date' => 'Προτεινόμενη ημερομηνία λήξη',
        'Remove' => 'Αφαίρεση',
        'Tell us about your project' => 'Πείτε μας για το έργο σας',
        'Send request' => 'Αποστολή αιτήματος',
        'File' => 'Αρχείο',
        'Less than' => 'Λιγότερο από',
        'More than' => 'Περισσότερο από',
        //(Oracle, MySql,MongoDB)
        'Desktop Application' => 'Εφαρμογή για επιτραπέζιο Η/Υ',
        'Software language' => 'χρήση των τεχνολογιών Php,Java, C/C++, SqL,NoSQL,Css,Html,JavaScript',
        'Mobile Systems' => 'χρήση των συστημάτων jQueryMobile, PhoneGap,Android',
        'Maintenance' => 'Συντήρηση',
        'Open sources' => 'χρήση των τεχνολογιών ανοικτού κώδικα όπως  Magento, Zend Framework, Wordpress, Facebook api
                                 Google api, Twitter Api...',
        //Υποβολή του έργου σας
        'Submit your project' => 'Υποβολή του έργου σας',
        //Hardware activities
        'Develop and Maintain your hardware with us' => 'Αναπτύξτε μαζί μας',
        'Design' => 'Σχεδίαση',
        'Programming' => 'Προγραμματισμός',
        'Assembly and disassembly' => 'Συναρμολόγηση και αποσυναρμολόγηση',
        'Configuration' => 'Διαμόρφωση',
        'Hardware design' => 'Σχεδιασμός υλικού',
        'Architecture' => 'Αρχιτεκτονική',
        'Define Overall Chip' => 'Καθορισμός τσιπάκι',
        'Control Model' => 'Πρότυπο ελέγχου',
        'Initial Floorplan' => 'Αρχικοποίηση μακέτας',
        'Logic' => 'Λογική',
        'Behavioral Simulation' => 'Συμπεριφοριστική προσομοίωση',
        'Logic Simulation' => 'Προσομοίωση λογικής ',
        'Synthesis' => 'Σύνθεση',
        'Datapath Schematics' => 'Μονοπάτι δεδομένων',
        'Circuit' => 'Κύκλωμα',
        'Cell Libraries' => 'Βιβλιοθήκες κυττάρων',
        'Circuit Schematics' => 'Σχηματικές αναπαραστάσεις κυκλωμάτων',
        'Circuit Simulation' => 'Προσομοίωση κυκλωμάτων',
        'Megacell Blocks' => 'Megacell μπλοκ',
        'Physical' => 'Σχεδίαση μακέτας',
        'Layout and Floorplan' => 'Διάταξη και Κάτοψη',
        'Place and Route' => 'Τόπος και Ροή',
        'Parasitics Extration' => 'Εκχύλιση παρασιτικών ',
        'DRC/LVS/ERC' => 'DRC/LVS/ERC',
        'Design and simulate your hardware circuit and chip with tools such as' => 'Σχεδιάζει και προσομοίωνει το κύκλωμα του υλικού με εργαλεία όπως',
        'Hardware circuit maker' => 'Hardware circuit maker',
        'VHDL' => 'VHDL',
        'Verilog' => 'Verilog',
        'Hardware Programming' => 'Προγραμματισμός τσιπ',
        'Testing' => 'Δοκιμές',
        'Declarative' => 'Δηλωτική',
        'Constraint' => 'Περιορισμός',
        'Dataflow' => 'Ροή δεδομένων',
        'Functional' => 'Λειτουργική',
        'Metaprogramming' => 'Μετα-προγραμματισμός',
        'Automatic' => 'Αυτόματος',
        'Reflective' => 'Αντανακλαστικός',
        'Homoiconic' => 'Ομοιο-εικονική',
        'Template' => 'Πρότυπο',
        'Language-oriented' => 'Αντικειμενοστραφής',
        'Natural language programming' => 'Περιορισμός με φυσική γλώσσα ',
        'Discipline-specific' => 'Ειδικά επιστημονική',
        'Domain-specific' => 'Ειδικά τεχνολογική',
        'Grammar-oriented' => 'Ειδικά θεωρητική',
        'Intentional' => 'Σκόπιμος',
        'Code your chip with hardware powerful language' => 'Κωδικοποιήστε το τσιπ σας με την ισχυρή γλώσσα υλικού',
        'Assembly' => 'Assembly',
        'Hardware Components' => 'Τμήματα υλικού',
        'Disassembly' => 'Αποσυναρμολόγηση',
        'assemble hardware system such as' => 'συναρμολόγηση σύστημα υλικού όπως',
        'Pc Computer (Laptop - Desktop - Mainframe)' => 'Pc Υπολογιστών (Laptop - Desktop - Mainframe)',
        'Cell phone' => 'Κινητό τηλέφωνο',
        'All programmable devices devises' => 'Όλες οι προγραμματιζόμενες συσκευές',
        'disassemble hardware system such as' => 'αποσυναρμολόγησης σύστημα υλικού όπως',
        'Assembly and disassembly any computer based  devices such as' => 'Συναρμολόγηση και Αποσυναρμολόγηση συσκευών που βασίζονται σε υπολογιστή, όπως',
        'Laptop' => 'Laptop',
        'Cell telephone' => 'Τηλέφωνο κυττάρων',
        'Desktop computer' => 'Υπολογιστής γραφείου',
        'Cisco switches and routers' => 'Κόμβοι και δρομολογητές της Cisco',
        'Server' => 'Διακομιστής',
        'for update, upgrade and troubleshoot.' => 'για ενημέρωση, αναβάθμιση και αντιμετώπιση προβλημάτων.',
        'Made easy, with low cost but highest quality' => 'Γίνεται εύκολα, με χαμηλό κόστος και υψηλή ποιότητα',
        'Hardware Management' => 'Διαχείριση υλικού',
        'Management' => 'Διαχείριση',
        'configure hardware system such as' => 'Ρύθμιση υλικού, όπως',
        'bring any computer based  devices such as' => 'φέρτε οποιεσδήποτε βασισμένες σε υπολογιστή συσκευές όπως',
        'close to your needs' => 'Κοντά στις ανάγκες',
        'Hardware Maintenance' => 'Συντήρηση υλικού',
        'maintain hardware system such as' => 'Συντήρηση υλικού όπως',
        'care of any computer based  devices such as' => 'φροντίδα προγραματιζόνων συσκευών, όπως',
        'by resolving any working away' => 'με επίλυση οποιασδήποτε δισλειτουργία',
        'Hardware project' => 'Έργο υλικού Η/Υ',
        'project-hardware' => '<p> Στη <a href="javascript:void()">
        DoSoft </a> έργον υλικού Η/Υ, χειριζόμαστε το έργο σας όπως εσείς επιθυμείτε.
        Με το έργο σας, εμείς εργαζόμαστε για σας για την ολοκλήρωση κάθε
        απαίτηση βασισμένοι στις καθορισμένες απαιτήσεις και τον προϋπολογισμό σας.
        </p><p>Επίσης, όταν το έργο ετοιμο να ξεκινήσει,
        θα πρέπει να εξασφαλίσετε 20% του προϋπολογισμού του έργου,
        που θα φιλοξενηθεί στον πόρο του έργου μέχρι την πρώτη παράδοση της δοκιμής.
        </p><p>Με άρνηση παράδοσης, και χωρίς αίτηση αλλαγών, το έργο και ο πόρος επανέλθουν αυτόματα.</p>
        <p> Για περισσότερες πληροφορίες, παρακαλούμε <a href="#contact"> <br/>
        Επικοινωνήστε μαζί μας </a>ή να διαβάσετε περισσότερα στο
        <a id="ds-faq-project" data-doc="faq" class="faq ds-faq-project" href="javascrip:void()"> Συχνές ερωτήσεις </a><br/>
        <strong style="padding: 3px" class="italic pull-right">
        <a href="javascript:void()"> DoSoft </a>ομάδας έργου Η/Υ</strong>
         </p>',
        //Hardware software activities
        'Embedded with us your' => 'Ενσωματώστε μαζί μας',
        'Computer Network' => 'Δίκτυα Η/Υ',
        'Robotics & Microcontrollers' => 'Ρομποτική & Μικροελεγκτές',
        'Server Management' => 'Διαχείρηση εξυπηρετητή',
        'Industrial automation with PLC' => 'Βιομηχανικοί αυτοματισμοί με PLC',
        'design computer network such as'=>'Σχεδιασμός δικτύου υπολογιστών, όπως',
        'Local area network (LAN)'=>'Τοπικό δίκτυο (LAN)',
        'Metropolitan area network (MAN)'=>'Μητροπολιτικό δίκτυο (ΜΑΝ)',
        'Wide area network (WAN)'=>'Δίκτυο ευρείας περιοχής (WAN)',
        'Wireless network (WN)'=>'Ασύρματο δίκτυο (WN)',
        'code'=>'κωδικοποίηση',
        'Switching'=>'Κόμβος',
        'Routing'=>'Δρομολόγηση',
        'Virtual network (VLAN, VMAN, VWAN)'=>'Εικονικά δίκτυα (VLAN, VMAN, VWAN)',
        'Implementation computer network such as'=>'Εγκατάσταση δικτύου υπολογιστών, όπως',
        'Network performance'=>'Απόδοση δικτύου υπολογιστών',
        'perform computer network such as'=>'Απόδοση δίκτυο υπολογιστών, όπως',
        'Security'=>'Ασφάλεια',
        'secure computer network such as'=>'Ασφαλείστε δίκτυο υπολογιστών, όπως',
        'Design, code, maintain and  extend any computer network such as'=>'Σχεδιάζει, κωδικοποίει, Συντηρεί και επεκτείνει οποιοδήποτε δίκτυο υπολογιστών, όπως',
        'distribution and subnetting'=>'Διανομή και υποδικτύωση',
        'Frame relay network(RIP,..)'=>'Δίκτυο Frame relay (RIP, ..)',
        'Secure, optimise and Performance'=>'Ασφάλεια,βελτιστοποίηση και απόδοση',
        'Integration'=>'Ενσωμάτωση',
        'design robotic system'=>'Σχεδιασμός ρομποτικού συστήματος',
        'code robotic system with'=>'Κωδικοποίση ρομποτικού συστήματος με',
        'Assembly language'=>'Γλώσσα μηχανής (Assembly language)',
        'C language'=>'Γλώσσα C',
        'VDCL simulation language'=>'Γλώσσα προσομοίωσης VDCL',
        'Design, create and extend servo (microcontroller) based robot systems'=>'Σχεδιασμός, δημιουργία και επέκταση σερβο (μικροελεγκτή) συστήματα που βασίζονται σε ρομπότ',
        'Single'=>'Ενιαία',
        'Distributed'=>'Κατανεμημένα',
        'Installation'=>'Εγκατάσταση',
        'Troubleshooting'=>'Αντιμετώπιση προβλημάτων',
        'File Share'=>'Κοινή χρήση αρχείων',
        'Mail filtering'=>'Φιλτράρισμα ηλεκτρονικού ταχυτρομείου',
        'Short Message Service (SMS) Gateway'=>'Υπηρεσία σύντομων μηνυμάτων (SMS)',
        'Install, configure and  extend any file hosting  based on  operating system such as'=>'Εγκατάσταση, παραμετροποίηση και επέκταση οποιοδήποτε αρχείο φιλοξενία που βασίζεται στο λειτουργικό σύστημα, όπως',
        'Windows server'=>'διακομιστής με Microsfot Windows',
        'Web Server'=>'Κεντρικός υπολογιστής δικτύου',
        'File sharing'=>'Κοινή χρήση αρχείων',
        'best practices'=>'Kαλύτερες πρακτικές',
        'Design & Integration'=>'Σχεδιασμός & Ενσωμάτωση',
        'Ladder Diagrams (LD)'=>'Διαγράμματα Ladder (LD)',
        'Function Block Diagram (FBD)'=>'Λειτουργία μπλοκ διάγραμμα (FBD)',
        'Instruction List (IL)'=>'Λίστα Εντολών (IL)',
        'Structured Text (ST)'=>'Δομημένου κειμένου (ST)',
        'Communication network protection'=>'Προστασία του δικτύου επικοινωνίας',
        'tag programmable logic control with SCADA base for design programming any automated production system'=>'Κάθε προγραμματίσημος έλεγχος λογικής με τη βάση SCADA για το σχέδιο που προγραμματίζει οποιοδήποτε αυτοματοποιημένο σύστημα παραγωγής',
        'Easily, with low cost but highest quality'=>'Εύκολα, με το χαμηλότερο κόστος αλλά την υψηλότερη ποιότητα',
        'PLC Maintenance'=>'Συντήρηση PLC',
        'maintain embedded systems such as'=>'Συντηρεί ενσωματωμένα συστήματα όπως',
        'Microcontrollers based systems'=>'Συστήματα βασισμένα σε  μικροελεγκτές',
        'Servers'=>'Διακομιστές',
        'Plcs'=>'Plcs',
        'Installation(SMTP,POP/IMAP, Mail filtering)'=>'Εγκατάσταση (SMTP, POP / IMAP, φιλτράρισμα Mail)',
        'care of any programmable devices by resolving any working away'=>'φροντίδα οποιαδήποτε προγραμματιζόμενων συσκευών με επίλυση τυχόν δυσλειτουργιών ',
        'Embedded systems project'=>'Έργο ενσωματωμένα συστήματα',
        'Embedded_systems_project'=>'<p> Στη <a href="javascript:void()">
        DoSoft </a> έργον Ενσωματομένα συστήματα, χειριζόμαστε το έργο σας όπως εσείς επιθυμείτε.
        Με το έργο σας, εμείς εργαζόμαστε για σας για την ολοκλήρωση κάθε
        απαίτηση βασισμένοι στις καθορισμένες απαιτήσεις και τον προϋπολογισμό σας.
        </p><p>Επίσης, όταν το έργο ετοιμο να ξεκινήσει,
        θα πρέπει να εξασφαλίσετε 20% του προϋπολογισμού του έργου,
        που θα φιλοξενηθεί στον πόρο του έργου μέχρι την πρώτη παράδοση της δοκιμής.
        </p><p>Με άρνηση παράδοσης, και χωρίς αίτηση αλλαγών, το έργο και ο πόρος επανέλθουν αυτόματα.</p>
        <p> Για περισσότερες πληροφορίες, παρακαλούμε <a href="#contact"> <br/>
        Επικοινωνήστε μαζί μας </a>ή να διαβάσετε περισσότερα στο
        <a id="ds-faq-project" data-doc="faq" class="faq ds-faq-project" href="javascrip:void()"> Συχνές ερωτήσεις </a><br/>
        <strong style="padding: 3px" class="italic pull-right">
        <a href="javascript:void()"> DoSoft </a>ομάδας έργου Η/Υ</strong>
         </p>',
        //Training
        'Teach yourself' => 'Διδάξτε τον εαυτό σας',
        'FrondEnd' => "HMTL, CSS, JAVASCRIPT",
        'BACKEND' => "C/C++, JAVA. PHP, SQL, NoSQL",
        'Software Design' => 'Σχεδίαση Λογισμικού',
        'WEBDESIGH' => 'Responsive Design',
        'Performance' => 'Performance',
        'Sign up' => 'Εγγραφείτε',
        'About us' => 'Ποιοι είμαστε',
        'Contact us' => 'Επικοινωνήστε μαζί μας',
        'Presentation and Events'=>'Παρουσίαση και Γεγονότα',
        'Basic'=>'Γενικώς',
        'Professional'=>'Επαγγελματικώς',
        'Modern'=>'Σύγχρονες τάσεις',
        'you learn and add to your knowledge base theweb page presentation in practice with'=>'μαθαίνετε και προσθέτετε στη βάση γνώσεών σας την παρουσίαση ιστοσελίδας στην πράξη με',
        'At'=>'Στη',
        'high performance'=>'υψηλή ταχύτητα',
        'Secure coding'=>'Ασφαλής κωδικοποίηση',
        'in mind. From notice to professional'=>'στο μυαλό. Από γενικό έως το ειδικό',
        'Web and Desktop application'=>'Διαδικτυακές και Μη εφαρμογές',
        'you learn and add to your knowledge base the data manipulation languages and saving in practice with'=>'μαθαίνετε και προσθέτετε στη βάση γνώσεών σας τις γλώσσες χειρισμού και αποθήκευσης δεδομένων στην πράξη με',
        'Software technology'=>'Τεχνολογία λογισμικού',
        'Design lifecycle'=>'Κύκλος ζωής σχεδιασμού',
        'Requirement gathering'=>'Συλλογή απαιτήσεων',
        'Specification export'=>'Εξαγωγή προδιαγραφών',
        'Analysis phase'=>'Φάση ανάλυσης',
        'Coding'=>'Κωδικοποίηση',
        'Maintenance lifecycle'=>'Κύκλος ζωής συντήρησης',
        'Handle change request'=>'Διαχείρηση αλλαγών',
        'Extend the application'=>'Επέκταση εφαρμογής',
        'User training'=>'Κατάρτιση χρηστών',
        'Howto'=>'Πώς',
        'use the application'=>'Χρήση εφαρμογής',
        'Application Documentation'=>'Τεκμηρίωση εφαρμογής',
        'Application implementation'=>'Στήσιμο εφαρμογής',
        'you learn and add to your knowledge base the theory of software technologies used in practice with'=>'μαθαίνετε και προσθέτετε στη βάση γνώσεών σας τη θεωρία των τεχνολογιών λογισμικού που χρησιμοποιούνται στην πράξη με',
        'Methodology'=>'Μεθοδολογία',
        'Design pattern'=>'Πρότυπο σχεδιασμού',
        'QA (Quality assurance)'=>'QA (εξασφάλιση ποιότητας)',
        'Basic project management'=>'Διαχείρηση έργου γενικώς',
        'Responsive Design'=>'Δυναμική σχεδίαση',
        'View'=>'Εμφάνιση',
        'Content'=>'Περιεχομένο',
        'Css based'=>'Με βάση γλώσσας οργάνωσης CSS',
        'Javascript based'=>'Με βάση γλώσσας γεγονότων Javascript',
        'Mixed Css and Javascript'=>'Συνδιασμός Css και Javascript',
        'Content fit'=>'Προσαρμογή περιεχομένου',
        'Content reduce'=>'Περικοπή περιεχομένου',
        'Content map'=>'Χαρτογράφηση περιεχομένου',
        'Bandwidth'=>'Εύρος ζώνης',
        'Connectivity'=>'Συνδεσιμότητα',
        'you learn and add to your knowledge base the interface component fit in practice with'=>'αθαίνετε και προσθέτετε στη βάση γνώσεών σας την τακτοποίηση τμημάτων διεπαφών στην πράξη με',
        'Specific device'=>'Ειδική συσκευή',
        'General device'=>'Γενική συσκευή',
        'Data mapping (RESTFUL data)'=>'Χαρτογράφηση δεδομένων',
        'Design optimisation'=>'Βελτιστοποίηση σχεδιασμού',
        'Code management & Best practices'=>'Διαχείριση κώδικα & καλύτερες πρακτικές',
        'Application optimisation'=>'Βελτιστοποίηση εφαρμογή',
        'you learn and add to your knowledge base the code and data performance  in practice with'=>'μαθαίνετε και προσθέτετε τη βάση γνώσεών σας στην απόδοση κώδικα και δεδομένων στην πράξη με',
        'Code optimisation'=>'Βελτιστοποίηση κώδικα',
        'Api consumption'=>'Κατανάλωση γενικών κώδικα (API)',
        'Data reduce and mapping'=>'Χαρτογράφηση και περικοπή δεδομένων',
        'Code and data structure'=>'Δόμηση κώδικα και δεδομένων',
        'First name'=>'Όνομα',
        'Last name'=>'Επώνυμο',
        'Message'=>'Μήνυμα',
        'Learn Offline'=>'Στο χώρο μου',
        'Learn online'=>'Εξ’αποστάσεως',
        'Learn first'=>'Μάθετε πρώτα',
        'ds-learn'=>'<p>Μάθετε και να προσθέσετε στη βάση των γνώσεων σας,
		             πρακτική και θεωρία της τεχνολογίας πληροφορικής 7/7.<br />
                       Από το λογισμικό στο υλικό, από το διαδίκτυο στο κινητό.
                       </p><p>Όλα τα μαθήματα μας γίνονται Σαββατοκύριακο και καθημερινά το απόγευμα.<br />
                         Στο τέλος του μαθήματος, θα σας ζητηθεί να μας πληρώσετε το ορισμένο προϋπολογισμό μαθήματος.
                         </p><p>Για περισσότερες πληροφορίες, παρακαλώ<a href="#contact"> <br/> Επικοινωνήστε μαζί μας </a>
                           ή διαβάσετε περισσότερα στη <a id="ds-faq-project" data-doc="faq" class="faq ds-faq-project" href="javascrip:void()">
                           FAQ.</a><br/><strong style="padding: 3px" class="italic pull-right">
                         <a href="javascript:void()">DoSoft</a> ομάδα διδασκαλίας.
                         </strong></p>',
        'Please' => 'Παρακαλώ',
        'start date' => 'ημερομηνία έναρξης',
        'end date' => 'ημερομηνία παράδοσης',
        'valid file' => 'έγκυρο αρχείο',
        'Description' => 'περιγραφή',
        'Online' => 'Εξ’αποαστάσεως',
        'Offline' => 'Στο χώρο μου',
        'Page Not Found (404)'=>'Η σελίδα δεν βρέθηκε (404)',
        'The page'=>'Η σελίδα ',
        "do not exist."=>"δεν υπάρχει.",
        'Please, visit the'=>'Παρακαλούμε, επισκεφθείτε τη',
        'DoSoft informatics services'=>'DoSoft υπηρεσίες πληροφορικής',
        "if you're looking for service"=>"αν ψάχνετε για μία υπηρεσία",
        ',or'=>',ή',
        "e-mail us"=>"στείλτε μας μήνυμα",
        'if you need further assistance.'=>'αν χρειάζεστε περαιτέρω βοήθεια.',
        'Thank you!'=>'Ευχαριστούμε!',
        '500 Internal Server Error'=>'500 Εσωτερικό σφάλμα διακομιστή',
        "The server encountered an internal error or misconfiguration and was unable to complete your request"=>"Ο διακομιστής αντιμετώπισε ένα εσωτερικό σφάλμα ή εσφαλμένης και δεν μπόρεσε να ολοκληρώσει το αίτημά σας",
        "Please contact the server administrator and inform them of the time the error occurred, and the actions you performed just before this error"=>"Παρακαλούμε επικοινωνήστε με το διαχειριστή του διακομιστή και τους γνωστοποιεί τη στιγμή που το σφάλμα, και οι ενέργειες που πραγματοποιήθηκαν λίγο πριν αυτό το σφάλμα",
        "More information about this error may be available in the server error log."=>"Περισσότερες πληροφορίες σχετικά με αυτό το σφάλμα μπορεί να είναι διαθέσιμη στο αρχείο καταγραφής σφαλμάτων του διακομιστή.",
        'Apache Server at dosoft.info Port 80'=>'Διακομιστής Apache της dosoft.info στη θύρα 80',
        'Please: your e-mail is not valid!'=>'Παρακαλώ: Το email σας δεν είναι έγκυρο!',
        'Please: use other than ours!'=>'Παρακαλούμε: βάλτε το δικό σας email',
        'Thank you! We will contact back sooner!'=>'Ευχαριστούμε! Θα επικοινωνήσουμε μαζί σας συντομότατα!',
        'Thanks for your message'=>'Σας ευχαριστούμε που επικοινωνήσατε μαζί μας',
        "We'll contact you very soon !!!"=>"Θα επικοινωνήσουμε μαζί σας πολύ σύντομα !!!",
        'Please enter the project identifier sent to your E-mail address'=>'Παρακαλώ εισάγετε το αναγνωριστικό του έργου που έχει σταλεί στη διεύθυνση e-mail σας',
        'Project identifier'=>'Αναγνωριστικό έργου',
        "Project identifier <strong>NOT</strong> valid"=>"Αναγνωριστικό έργου <strong>ΜΗΝ</strong> έγκυρο",
        'Cancel'=>'Ματαίωση',
        'Submit'=>'Υποβολή',
        "POLICY_TITLE"=>"Πολιτική απορρήτου",
        "POLICY_P1" =>"Αυτή η δήλωση περιγράφει τις πρακτικές συλλογής πληροφοριών, τη χρήση και τη διάδοση που ισχύουν στη DoSoft υπηρεσιών πληροφορικής.",
        "POLICY_P2" =>"Η DoSoft υπηρεσίες πληροφορικής χρησιμοποιεί την υπηρεσία προσωρινής αποθήκευσης προσωπικών πληροφοριών των περιηγητών(cookies) για την ενίσχυση της λειτουργίας της ιστολίδας και μόνο. Εάν δεν επιθυμείτε την υπηρεσία αυτή, μπορείτε να τροποποιήσετε τις ρυθμίσεις του περιηγητή σας για τη μη χρήση της. Παρακαλώ σημειώστε ότι αν επιλέξετε να την απορρίψετε, αυτό θα περιορίσει την προσβαμότητα σε ορισμένες λειτουργίες της ιστολίδας και να έχει αρνητική επίδραση στην απόδοση.",
        "POLICY_P3" =>"<b>Μη-προσωπικά στοιχεία συλλέγονται από DoSoft υπηρεσίες πληροφορικής.</b>",
        "POLICY_P4" =>"DoSoft υπηρεσίες πληροφορικής συλλέγει ορισμένες μη προσωπικές πληροφορίες. Αυτό περιλαμβάνει δεδομένα σχετικά με τη διάρκεια της επίσκεψης του χρήστη, πόσο συχνά γίνεται πρόσβαση και άλλες πληροφορίες που σχετίζονται με τη δραστηριότητα. Αυτή η πληροφορία χρησιμοποιείται για να αναλύσει τη χρήση της εφαρμογής, για τη βελτίωση και την ενίσχυση της ποιότητας των υπηρεσιών μας. Αυτή η πληροφορία είναι πάντα υπό τη μορφή αδρανών, μη-προσωπικές πληροφορίες. Αυτές οι πληροφορίες μπορούν να μοιραστούν με τους εταίρους της DoSoft υπηρεσιών πληροφορικής για την παροχή καλύτερων υπηρεσιών προς εσάς.",
        "POLICY_P5" =>"Η διαδικτυακή διεύθυνση (IP) του κάθε χρήστη, επίσης, εξετάζεται. Αυτη συλλέγεται ως μη προσωπικό στοιχείο, αλλά ως συγκεντρωτικά στοιχεία. Συλλέγεται να μας βοηθάει να διαγνώσουμε προβλήματα με τις υπηρεσίες μας. DoSoft υπηρεσίες πληροφορικής μπορεί να χρησιμοποίει τρίτους για την ανάλυση της μη-προσωπικά, συγκεντρωτικές πληροφορίες που συλλέγονται από εμάς. Αυτό μπορεί επίσης να διατίθενται σε οργανώσεις, μέσα ενημέρωσης και εταιρείες ερευνών για σκοπούς σύγκρισης.",
        "POLICY_P6" =>"Οι προσωπικές πληροφορίες που συλλέγονται από τις υπηρεσίες DoSoft πληροφορικής για την περιήγηση σε περιεχομένου  μπορεί να προσεγγιστεί κατά την υπηρεσία εγγραφής. Αν επιλέξετε να προσθέσετε την υπηρεσία σας DoSoft.info, θα συλλέγουμε προσωπικές πληροφορίες σχετικά με το όνομά σας και στοιχεία επικοινωνίας. Αυτές οι πληροφορίες μπορούν να προσεγγιστούν από εσάς επικοινωνώντας μαζί μας.",
        "POLICY_P7" =>"Αυτές οι πληροφορίες χρησιμοποιούνται μόνο για να διευκολύνει τη μελλοντική συνεργασία μας. Μπορείτε να ζητήσετε να διαγραφούν τα στοιχεία του λογαριασμού σας. Κάθε πληροφορίες που έχουν διαγραφεί μπορούν να διατηρούνται στο σύστημα πληροφορικής μας για ένα χρονικό διάστημα. DoSoft υπηρεσίες πληροφορικής διατηρεί τη διακριτική ευχέρεια να απενεργοποιήσει ή να διαγράψει το λογαριασμό σας ανά πάσα στιγμή.",
        "POLICY_PERSONAL_INFO_TITLE" =>"Δημοσίευση προσωπικών πληροφοριών",
        "POLICY_PERSONAL_INFO_P" =>"DoSoft Υπηρεσιών Πληροφορικής έχει κοινόχρηστο προς χρήστες, για παράδειγμα, ένα blog. Σας συνιστούμε να μην δημοσιεύουν προσωπικές πληροφορίες σε αυτές τις περιοχές. DoSoft υπηρεσίες πληροφορικής δεν αναλαμβάνει καμία ευθύνη για οποιαδήποτε συλλογή ή χρήση από τρίτους των πληροφοριών που γνωστοποιούνται με αυτόν τον τρόπο.",
        "POLICY_PERSONAL_SECURITY_TITLE" =>"Ασφάλεια και εμπιστευτικότητα",
        "POLICY_PERSONAL_SECURITY_P" =>"DoSoft υπηρεσίες πληροφορικής λαμβάνει όλα τα εύλογα μέτρα για να εξασφαλίσει την προστασία των πληροφοριών σας και την ασφάλεια του συστήματός μας. Τα μέλη της ομάδας μας είναι επίσης υποχρεωμένοι να τηρούν το απόρρητο των προσωπικών σας πληροφοριών.",
        "POLICY_PERSONAL_SECURITY_P_1" =>"Ωστόσο, δεν μπορούμε να εγγυηθούμε την ασφάλεια των πληροφοριών και δεν είμαστε υπεύθυνοι για οποιαδήποτε μη εξουσιοδοτημένη πρόσβαση στα προσωπικά σας στοιχεία." ,
        "POLICY_PERSONAL_SECURITY_P_2" =>"Είναι επίσης σημαντικό να διατηρήσετε τα στοιχεία επικοινωνίας σας ασφαλείς, συμπεριλαμβανομένης και του κωδικού της αναγνώρισης υπηρεσίας σας. Αν υποψιάζεστε οποιαδήποτε μη εξουσιοδοτημένη πρόσβαση ή χρήση του αναγνωριστικού υπηρεσίας σας, ή οποιαδήποτε άλλη παραβίαση της ασφάλειας, παρακαλούμε να μας ενημερώσετε αμέσως." ,
        "POLICY_PERSONAL_OVERSEAS_TITLE" =>"Πρόσβαση σε πληροφορίες" ,
        "POLICY_PERSONAL_OVERSEAS_P" =>"DoSoft υπηρεσίες πληροφορικής μπορεί από καιρό σε καιρό, να αναθεωρεί τις πληροφορίες της υπηρεσίας σας. Συμφωνείτε να συμβεί αυτό όταν μας παρέχετε με πληροφορίες των υπηρεσιών σας." ,
        "POLICY_PERSONAL_ACCESS_TITLE" =>"Πρόσβαση στις πληροφορίες σας" ,
        "POLICY_PERSONAL_ACCESS_P" =>"Εάν είστε εγγεγραμμένος χρήστης, μπορείτε να αποκτήσετε πρόσβαση σε πληροφορίες σας μέσω του e-mail σας. Αυτή η πληροφορία μπορεί να αλλάξει και να διαγραφεί." ,
        "POLICY_CHANGE_TITLE" =>"αλλαγές" ,
        "POLICY_CHANGE_P" =>"DoSoft υπηρεσίες πληροφορικής μπορεί από καιρό σε καιρό να αποφασίσει να αλλάξει αυτή την πολιτική. Όλες οι ενημερωμένες εκδόσεις θα είναι διαθέσιμες στην εφαρμογή." ,
        "POLICY_CONTACT_US_TITLE" =>"Επικοινωνήστε μαζί μας" ,
        "POLICY_CONTACT_US_P" =>"Εάν έχετε οποιεσδήποτε απορίες σχετικά με αυτή την πολιτική ή τη χρήση των πληροφοριών σας, παρακαλούμε επικοινωνήστε μαζί μας." ,
        "FAQ_HOW_IT_WORKS_TITLE" =>"Πώς λειτουργεί η ιστοσελίδα ;" ,
        "FAQ_HOW_IT_WORKS_P" =>"DoSoft υπηρεσίες πληροφορικής έχει κατηγοποίησει τις υπηρεσίες της για να σας βοηθήσει να βρείτε εύκολα την κατηγορία της υπηρεσίας σας. Για να προσθέσετε την υπηρεσία σας, αν την βρείτε, θα πρέπει να συμπληρώσετε στη φόρμα καταχώρησης υπηρεσίας, τα στοιχεία της υπηρεσίας σας. Όλες οι πληροφορίες σας θα σταλεί σε σας στη διεύθυνση e-mail σας και θα διατηρούνται στο σύστημα μας. Κάθε υπηρεσία έχει προστεθεί, έχει ένα μοναδικό αναγνωριστικό που σας στέλνετε μετά από επιτυχεί καταχώρηση της υπηρεσίας σας. Στη συνέχεια, DoSoft υπηρεσίες πληροφορικής θα επικοινωνήσουμε μαζί σας για επιβεβαίωση.",
        "FAQ_WHAT_SERVICE_TITLE" =>"Κατηγορία υπηρεσιών",
        "FAQ_WHAT_SERVICE_P" =>"DoSoft υπηρεσίες πληροφορικής χειρίζεται λογισμικό και το υλικό του Η/Υ σε θέματα σχεδιασμό, την ανάπτυξη, την ολοκλήρωση, την εφαρμογή και την τεκμηρίωση. Επίσης, την κατάρτιση σε πληροφορική από αρχάριους μέχρι και στους επαγγελματίες." ,
        "FAQ_SERVICE_ADD_TITLE" =>"Πώς μπορώ να προσθέσω την υπηρεσία μου;" ,
        "FAQ_SERVICE_ADD_P" =>"Απλά κάντε κλικ στην κατηγορία της υπηρεσίας σας και συμπληρώστε στη φόρμα τα στοιχεία της υπηρεσίας σας." ,
        "FAQ_SERVICE_PAY_TITLE" =>"Πώς μπορώ να πληρώσω για την υπηρεσία μου;" ,
        "FAQ_SERVICE_PAY_P" =>"DoSoft υπηρεσίες πληροφορικής δέχεται όλους τους τρόπους πληρωμής, συμπεριλαμβανομένων, PayPal και κατάθεση σε τραπεζικό λογαριασμό." ,
        "FAQ_SERVICE_CHANGE_DETAIL_TITLE" =>"Τι γίνεται αν χρειαστεί να αλλάξω τα στοιχεία της υπηρεσίας μου, που έχω ήδη σε εξέλιξη;" ,
        "FAQ_SERVICE_CHANGE_DETAIL_P" =>"Κανένα πρόβλημα. Κάθε αλλαγή μπορεί να γίνειυπηρεσία σε εξέλιξη. Ανάλογα με την αλλαγή αυτής, να έχετε κατά νου ότι, η DoSoft υπηρεσίες πληροφορικής θα επανεξετάσει μαζί σας, την ημερομηνία παράδοσης της υπηρεσίας σας και τον προύπολογισμό." ,
        "FAQ_SERVICE_NO_MORE_INFO_TITLE" =>"Τι γίνεται αν δε δίνω περισσότερες πληροφορίες κατά την καταχώρηση της υπηρεσίας μου;" ,
        "FAQ_SERVICE_NO_MORE_INFO_P" =>"Κανένα προβλήματα. Περισσότερες λεπτομέρειες μπορούν να δοθούν μετά από την επαφή με τη DoSoft υπηρεσίες πληροφορικής" ,
        "FAQ_SERVICE_MORE_INFO_TITLE" =>"Τι θα συμβεί αν ο προγραμματιστής ή ο εκπαιδευτής ζητά περισσότερες λεπτομέρειες σχετικά με την υπηρεσία μου;" ,
        "FAQ_SERVICE_MORE_INFO_P" =>"Κανένα πρόβλημα, η ομάδα της DoSoft υπηρεσίες πληροφορικής έχει τη δυνατότητα να σας κάνει ερωτήσεις για την υπηρεσία σας." ,
        "FAQ_SERVICE_ENSURED_TITLE" =>"Είναι η υπηρεσία μου εξασφαλισμένη ;" ,
        "FAQ_SERVICE_ENSURED_P" =>"Ναι, DoSoft υπηρεσίες πληροφορικής συνεργάζεται στενά σας." ,
        "FAQ_SERVICE_CONTACT_DEV_TRNER_TITLE" =>"Μπορώ να επικοινωνήσω με τον προγραμματιστή ή τον εκπαιδευτή μέσω τηλεφώνου ή e-mail;" ,
        "FAQ_SERVICE_CONTACT_DEV_TRNER_P" =>"Ναι, DoSoft υπηρεσίες πληροφορικής συνεργάζεται στενά σας." ,
        "FAQ_SERVICE_IN_PROCESS_MORE_INFO_TITLE" =>"Τι γίνεται αν έχω περισσότερες από μία υπηρεσία σε εξέλιξη;" ,
        "FAQ_SERVICE_IN_PROCESS_MORE_INFO_P" =>"Όταν μια υπηρεσία είναι έτοιμη να ξεκινήσει, DoSoft υπηρεσίες πληροφορικής ακολουθεί την ημερομηνία έναρξη και παράδοσης της υπηρεσίας σας. Μια σελίδα κατάστασης θα είναι διαθέσιμη για να σας κρατούμε ενήμερους." ,
        "FAQ_SERVICE_DEV_TRUSTABLE_TITLE" =>"Πώς μπορώ να ξέρω αν ο προγραμματιστής ή ο εκπαιδευτής είναι αξιόπιστος ή όχι;" ,
        "FAQ_SERVICE_DEV_TRUSTABLE_P" =>"Όλοι οι άνθρωποι μας είναι αξιόπιστοι. Μέλη μιας ομάδας με ειδικότητες." ,
        "FAQ_SERVICE_DEV_CHOOSE_TITLE" =>"Έχω να επιλέξω έναν προγραμματιστή ή εκπαιδευτή;" ,
        "FAQ_SERVICE_DEV_CHOOSE_P" =>"Όχι" ,
        "FAQ_SERVICE_GET_READY_TITLE" =>"Πόσο καιρό χρειάζεται για να παραδοθεί η υπηρεσία μου;",
        "FAQ_SERVICE_GET_READY_P" =>"DoSoft υπηρεσίες πληροφορικής σέβεται την αρχική ημερομηνία έναρξης και παράδοσης της υπηρεσίας σας. Οποιαδήποτε αλλαγή σε μια υπηρεσία σε εξέλιξη μπορεί να προκαλέσει παράταση στη ημερομηνία παράδοσης.",

    ];

    public static function getGreek(){
        return self::$sGreek;
    }
}