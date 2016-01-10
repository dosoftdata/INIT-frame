<?php
/**
 * Created by PhpStorm.
 * User: DoSoft
 * Date: 12/20/2015
 * Time: 8:14 PM
 */

namespace Php247\Translate;


trait TraitDocTranslate
{

    private static $aDoc = [
        'key' => [
            'en' => '',
            'fr' => '',
            'el' => '',
        ],
        "POLICY_TITLE" => [
            'en' => 'Policy',
            'fr' => '',
            'el' => ''],
        "POLICY_P1" => "This statement outlines the information collection, usage and dissemination practices that apply to DoSoft informatics services.",
        "POLICY_P2" => "The DoSoft may use cookies to enhance the information only across the application. If you do not wish to receive cookies you can modify your web browser settings to deny them. Please note that if you choose to decline cookies this may limit access to some areas of the application and have a negative effect on the performance.",
        "POLICY_P3" => "Non-personal information are collected by DoSoft informatics services.",
        "POLICY_P4" => "DoSoft informatics services collects certain non-personal information. This includes data relating to duration the user visit, how often they are accessed and other information relating to activity. This information is used to analyze the use of the application, to improve and enhance the quality of our services. This information is always in the form of aggregate, non-personal information. This information may be shared with partners of DoSoft informatics services to provide best services to you.",
        "POLICY_P5" => "IP address of each user is also gathered by DoSoft.info web server. These are collected as non-personal, aggregate data. It is collected to help us diagnose issues with our services.DoSoft informatics services may use third parties to analyze the non-personal, aggregate information collected by us. This may also be made available to media organizations and research companies for comparison purposes.",
        "POLICY_P6" => "Personal information collected by DoSoft informatics services searches and browsing of content on our application can be accessed upon service registration. If you choose to add your service with DoSoft.info, we will collect personal information about your name and contact details. This information can be accessed by you by contacting us.",
        "POLICY_P7" => "This information is used only to facilitate our future collaboration. You can alter request to delete the information your account. Any deleted information may be retained on DoSoft informatics services systems for a period of time after this. DoSoft informatics services reserves a discretion to disable or delete accounts at any time.",
        "POLICY_PERSONAL_INFO_TITLE" => "Publishing personal information",
        "POLICY_PERSONAL_INFO_P" => "DoSoft informatics services has publicly accessible areas of the application, for example blogs. We strongly suggest that you do not publish personal information in such areas. DoSoft informatics services takes no responsibility for any collection or use by third parties of information disclosed in this way.",
        "POLICY_PERSONAL_SECURITY_TITLE" => "Security and confidentiality",
        "POLICY_PERSONAL_SECURITY_P" => "DoSoft informatics services takes all reasonable steps to ensure the protection of your information and the security of our system. Our team members are also obliged to respect the confidentiality of your personal information.",
        "POLICY_PERSONAL_SECURITY_P_1" => "However, we cannot guarantee the security of this information and are not responsible for any unauthorized access to your personal information.",
        "POLICY_PERSONAL_SECURITY_P_2" => "It is also important that you keep your contact details confidential, including your service identifier. If you suspect any unauthorized access to or use of your service identifier, or any other breach of security please notify us immediately.",
        "POLICY_PERSONAL_OVERSEAS_TITLE" => "Overseas access to information",
        "POLICY_PERSONAL_OVERSEAS_P" => "DoSoft informatics services may from time to time review your service information. You agree to this occurring when you provide us with your service information.",
        "POLICY_PERSONAL_ACCESS_TITILE" => "How to access your information",
        "POLICY_PERSONAL_ACCESS_P" => "If you are a registered user, you can access your information via your e-mail. This information can be altered and deleted.",
        "POLICY_CHANGE_TITLE" => "Changes",
        "POLICY_CHANGE_P" => "DoSoft informatics services may from time to time decide to change this policy. Any updated versions will be available on the application.",
        "POLICY_CONTACT_US_TITLE" => "Contact us",
        "POLICY_CONTACT_US_P" => "If you have any queries relating to this policy or the use of your information please contact us.",
        "FAQ_HOW_IT_WORKS_TITLE" => "How does it work ?",
        "FAQ_HOW_IT_WORKS_P" => "DoSoft informatics services has specify her service to help you find easily the category of your service. To add your service, if founded, you have to fill in the form, the information of your service. All of your information will be sent to you be in your e-mail address and kept in the DoSoft informatics services system. Every service added has a unique identifier that is sent from the first contact. DoSoft informatics services will then contact you back for verification.",
        "FAQ_WHAT_SERVICE_TITLE" => "What service ?",
        "FAQ_WHAT_SERVICE_P" => "DoSoft informatics services handle software and hardware project from design, development, integration, implementation and documentation. Also, provides informatics training from notice to professional.",
        "FAQ_SERVICE_ADD_TITLE" => "How do I add my service ?",
        "FAQ_SERVICE_ADD_P" => "Simply click to your service category and fill in the form your service information.",
        "FAQ_SERVICE_PAY_TITLE" => "How to pay for my service ?",
        "FAQ_SERVICE_PAY_P" => "DoSoft informatics services accepts all payment types, includes, PayPal and bank deposit.",
        "FAQ_SERVICE_CHANGE_DETAIL_TITLE" => "What If I need to change the details of my service that I've already in process?",
        "FAQ_SERVICE_CHANGE_DETAIL_P" => "No problem. Any change can be provided on a service in process. By the type of a change, keep in mind that, DoSoft informatics services will review with you, your service end date and the cost.",
        "FAQ_SERVICE_NO_MORE_INFO_TITLE" => "What if I don't give more information ?",
        "FAQ_SERVICE_NO_MORE_INFO_P" => "No problems. More detail after a contact with DoSoft informatics services Team.",
        "FAQ_SERVICE_MORE_INFO_TITLE" => "What if the developer or trainer request more detail about my service ?",
        "FAQ_SERVICE_MORE_INFO_P" => "No problems, DoSoft informatics services Team has the ability to ask you questions about your service.",
        "FAQ_SERVICE_ENSURED_TITLE" => "Is my service ensured ?",
        "FAQ_SERVICE_ENSURED_P" => "Yes, DoSoft informatics services works closely with you.",
        "FAQ_SERVICE_CONTACT_DEV_TRNER_TITLE" => "Can I contact the developer or trainer by phone or e-mail ?",
        "FAQ_SERVICE_CONTACT_DEV_TRNER_P" => "Yes, DoSoft informatics services works closely with you.",
        "FAQ_SERVICE_IN_PROCESS_MORE_INFO_TITLE" => "What if i have more than one on service in process ?",
        "FAQ_SERVICE_IN_PROCESS_MORE_INFO_P" => "When a service is ready to start, DoSoft informatics services follow your service start and end date. Until that a status page will be available to keep you up to date.",
        "FAQ_SERVICE_DEV_TRUSTABLE_TITLE" => "How do I know if the developer or trainer is trustworthy or not ?",
        "FAQ_SERVICE_DEV_TRUSTABLE_P" => "All our people are trustable, member of a team in specific discipline.",
        "FAQ_SERVICE_DEV_CHOOSE_TITLE" => "Do I have to choose a developer or trainer ?",
        "FAQ_SERVICE_DEV_CHOOSE_P" => "No you do not. There is absolutely no.",
        "FAQ_SERVICE_GET_READY_TITLE" => "How long does it take to get ready my service ?",
        "FAQ_SERVICE_GET_READY_P" => "DoSoft informatics services respect your initial service start and end date. Any change on  a service in process can cause by yourself, the increment of your service end date",

    ];
} 