# best_marksmen
[champselect.info](http://champselect.info)<br />
A short PHP/html project that tells the user what ADC/marksmen the user would be most effective playing. 
+ App starts with [home.html](home.html) (form for user to answer)
+ [adc_array.php](adc_array.php) is a reference page of pre-determined (by me) attributes of each ADC
+ Algorithm on [adc_preference_functions.php](adc_preference_functions.php) takes user's answers and compares them with attributes pulled from adc_array.php
+ All comparisons for an ADC are averaged by summing together all differences then dividing by $weighted_average
+ Each ADC gets looped through and results are stored in $session_answer
+ Submitting home.html sends user to [adc_results.php](adc_results.php) where $session_answer is printed out, highest average first
+ Both home.html and adc_results.php uses pictures drawn from Riot's API Data Dragon; its URL is stored as a variable in [ddragon_version_url.php](ddragon_version_url.php)
+ adc_results.php also prints out highest averaging ADC's info, taken from reference page [adc_info.php](adc_info.php)
+ Viewable pages are bootstrapped and mobile-responsive, hence some divs being hidden on adc_results.php
+ home.html is div-ed up for next-few-questions look (I think this can be done better with JS, but I haven't learned that yet), using JQuery functions from [adc_select.js](adc_select.js).
+ adc_form_sql_conversion.php currently has no functionality until I learn more about sanitization.
<br /n>
<br />
Please let me know if you have any questions, or how I can improve the code or use best practices.  Thanks!

# 4/26 Changelog
+ Merged Crecket's home.html and adc_select.js edits
+ For clarity, renamed adc_form_functions3.php to adc_preference_functions.php
+ For clarity, renamed adc_array2.php to adc_array.php
+ Updated adc_results.php for CSS- and HTML-related best practices, and changed images from internal source to external Riot's API
+ Updated adc_preference_functions.php for parameter clarity
+ Since using Riot's API, champ_pics no longer necessary
+ Removed ?> tag from adc_array.php
+ Removed ?> tag from adc_preference_functions.php
+ Removed ?> tag from adc_info.php
+ Added ddragon_version_url.php
