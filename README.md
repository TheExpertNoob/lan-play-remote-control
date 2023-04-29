This is broken in my install of PHP 8.2.4

# lan-play-remote-control
A simple and dirty hack to connect and disconnect to Switch Lan Play servers.  
  
Download and edit as you need.  
  
Requires a Windows Apache/HTTP server with PHP such as https://www.uniformserver.com/ to work.  
  
index.php is where all the buisness is (it's a dirty hack).  
  
.htaccess restricts to your local network. It currently covers 127.0.0.1 192.168.0.0/16 172.16.0.0/12 10.0.0.0/8. If your local network differs, change or add the subnet mask you need.
  
You will also need https://github.com/spacemeowx2/switch-lan-play/releases. Just extract the exe to the same directory as index.php and .htaccess.
