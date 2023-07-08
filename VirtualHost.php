

  *xampp => apache => conf => httpd-vhosts.conf

   => open httpd-vhosts.conf file
  



<VirtualHost *:80>
    DocumentRoot "E:/Work/htdocs/shuchale_edu/public"  -> (jya project hoy tyanu root )
    ServerName shuchaleedu.com  (project no virtual je naam rakhvu hoy te)
</VirtualHost>


@  open C drive  windows => system32 => drivers => etc =>hosts

     *copy hosts file and pest desktop ( ahiya te edit thase nahi )

     *open hosts file =>

	# localhost name resolution is handled within DNS itself.
	127.0.0.1       	localhost
	#::1             	localhost
	127.0.0.1		shuchaleedu.com ( virtual host ahiya pest karvu)


