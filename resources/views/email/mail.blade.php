<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
<html lang="en">

<head>

</head>

<body
    style="background-color:#f5f5fb;font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,Oxygen-Sans,Ubuntu,Cantarell,&quot;Helvetica Neue&quot;,sans-serif">
    <table align="center" role="presentation" cellSpacing="0" cellPadding="0" border="0" width="100%"
        style="max-width:37.5em;margin:0 auto;padding:20px 0 48px">
        <tr style="width:100%">
            <td>

                <img src="http://localhost/apmax1/public/assets/img/logo.png" height="50px" width="150px">
                <p style="font-size:16px;line-height:26px;margin:16px 0">Welcome to adspaymax,<br>
                    Hi {{ $details['name'] }}, You've successfully signed up for our services</p>
                <p>

                    your new account
                </p>
                <p>Login : {{ $details['name'] }}</p>

                <p>Email : {{ $details['email'] }}</p>
                <p>Password : {{ $details['Password'] }}</p>
                <p>Store Name : {{ $details['store'] }}</p>
                <p>Address : {{ $details['Address'] }}</p>
                <p>Thank you</p>
                <p style="font-size:16px;line-height:26px;margin:16px 0">Best,<br />The adspaymax team</p>
                <hr style="width:100%;border:none;border-top:1px solid #eaeaea;border-color:#cccccc;margin:20px 0" />
                <p style="font-size:12px;line-height:24px;margin:16px 0;color:#8898aa">adspaymax</p>
            </td>
        </tr>
    </table>
</body>

</html>
