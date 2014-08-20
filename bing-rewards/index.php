<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bing Rewards Search Bot</title>
    <meta name="description" content="Rewards Bot automatically searches on Bing to earn Microsoft points! These points can be redeemed for free Xbox Live, Amazon, Starbucks gift cards and more!">
    <meta name="keywords" content="bing rewards, microsoft points">
    <link rel="canonical" href="http://pumpndump.in/bing-rewards-bot/">
    <link rel="shortcut icon" href="http://pumpndump.in/favicon.ico">
    <link href="../css/united.css" rel="stylesheet"/>
    <style>
      body {
       padding-top: 5px;
     }
      .input {
       border-width: 2px;
       box-shadow: none;
       border-radius: 4px;
       border: 1px solid #DCE4EC;
       color: #2C3E50;
       padding: 5px 10px;
       transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
       box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
       width: 60px;
       
     }
     .input:focus {
       box-shadow: none;
       border-color: #1ABC9C;
       outline: 0 none;
     }
     #checkbox {
       margin-left: 0px;
       float: none;
     }
    </style>
  </head>
  <body>
    <div class="container">
<div class="jumbotron">
  <h1>Bing Rewards Search Bot</h1>
  <p class="text-muted">Bing Search Bot to receive Microsoft points for Free!</p>
<table class="center">
  <tbody>
    <tr>
      <td>
        <p class="steps"><strong>Step 1</strong> : Sign up for <a target="_blank" href="http://www.bing.com/explore/rewards?PUBL=REFERAFRIEND&CREA=RAW&rrid=_ae94a7a5-e1ce-f96f-d094-c9efebdc5cfa">bing rewards</a> program and make sure you are logged in.</p>
        <div class="steps"><strong>Step 2</strong> : How long do you want to wait between searches?
          <input type="number" autocomplete="off" class="input" value="5" id="sWaitOne"> to
          <input type="number" autocomplete="off" class="input" value="15" id="sWaitTwo"> seconds
        </div>
        <div class="xtrasteps">
          <strong>Step 3</strong> : How many searches would you like to do?
          <input type="number" autocomplete="off" class="input" value="30" id="counter">
          <label class="checkbox-inline" for="">
            <input id="checkbox" type="checkbox" onclick="save_settings()" name="save_settings" value="1"/> Save Settings
          </label>
        </div>
        <form class="form"><strong>Search For : </strong>
          <input type="radio" checked="checked" value="Web" id="web" name="searchForm"> Web
          <input type="radio" value="Images" id="images" name="searchForm"> Images
          <input type="radio" value="Video" id="video" name="searchForm"> Video
          <input id="news" type="radio" name="searchForm" value="News"/> News
          <input type="radio" value="Random" id="random" name="searchForm"> Random
          <span class="search"><input class="btn btn-primary btn-sm" type="button" onclick="Start();" value="Start Searching!" name="search" id="search"></span>
        </form>
        <div id="status_message">
          <div class="text-info">Check <a target="_blank" href="http://www.bing.com/rewards/dashboard">Bing rewards dashboard</a> when the bot is finished to see your new points.
          </div>
        </div>
      </td></tr>
  </tbody>
</table>

</div>
<iframe style="width:100%; height:600px; margin-top:5px;" name="frmLoader" id="frmLoader" src="http://bing.com/" allowtransparency="true" sandbox="allow-forms allow-scripts"></iframe>
<div class="container">
  <iframe data-aa='14549' src='//ad.a-ads.com/14549?size=990x90' scrolling='no' style='width:990px; height:90px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
  <hr/>
      <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'pumpndump'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>  
</div>
<footer class="footer">
  <div class="container">
        <div itemscope itemtype="http://schema.org/Product">
      <span itemprop="name">Bing Rewards Bot</span>
      <div itemprop="aggregateRating"
        itemscope itemtype="http://schema.org/AggregateRating">
       Rated <span itemprop="ratingValue">4.5</span>/5
       based on <span itemprop="reviewCount">11</span> customer reviews
      </div>  
    </div>
  </div>
  <hr/>
  <p class="text-center">&copy; <?php echo date('Y'); ?> <a href="">pumpndump.in</a> </p>
</footer>
   

    </div>
    <script src="../js/jquery.js"></script>
    <script src="script.js"></script>
		<!-- Google Analytics: -->
		<script async="async">
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-39574724-1', 'pumpndump.in');
			ga('send', 'pageview');

		</script>
		<!-- Piwik -->
		<script async="async" type="text/javascript">
			var _paq = _paq || [];
			_paq.push(["trackPageView"]);
			_paq.push(["enableLinkTracking"]);

			(function() {
				var u = (("https:" == document.location.protocol) ? "https" : "http") + "://pumpndump.in/piwik/";
				_paq.push(["setTrackerUrl", u + "piwik.php"]);
				_paq.push(["setSiteId", "1"]);
				var d = document, g = d.createElement("script"), s = d.getElementsByTagName("script")[0];
				g.type = "text/javascript";
				g.defer = true;
				g.async = true;
				g.src = u + "piwik.js";
				s.parentNode.insertBefore(g, s);
			})();
		</script>
  </body>
</html>
