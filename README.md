# lan-play-remote-control
A simple and dirty hack to connect and disconnect to Switch Lan Play servers.  
  
Download and edit as you need.  
  
Requires a Windows Apache/HTTP server with PHP such as https://www.uniformserver.com/ to work.  
  
index.php is where all the buisness is (it's a dirty hack).  
  
.htaccess restricts to your local network. It's currently defaulted to 192.168.0.0/16 (I may update this with all the common LAN configs). Change this for your local network.  
  
You will also need https://github.com/spacemeowx2/switch-lan-play/releases. Just extract the exe to the same directory as index.php and .htaccess.
