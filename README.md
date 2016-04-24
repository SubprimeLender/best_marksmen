# best_marksmen
[champselect.info](http://champselect.info)<br />
A short PHP/html project that tells the user what ADC/marksmen the user would be most effective playing. 
+ App starts with [home.html](home.html) (form for user to answer)
+ [adc_array2.php](adc_array2.php) is a reference page of pre-determined (by me) attributes of each ADC
+ Algorithm on [adc_form_functions3.php](adc_form_functions3.php) takes user's answers and compares them with attributes pulled from adc_array2.php
+ All comparisons for an ADC are averaged by summing together all differences then dividing by $weighted_average
+ Each ADC gets looped through and results are stored in $session_answer
+ Submitting home.html sends user to [adc_results.php](adc_results.php) where $session_answer is printed out, highest average first
+ adc_results.php also prints out highest averaging ADC's info, taken from reference page [adc_info.php](adc_info.php)
+ Viewable pages are bootstrapped and mobile-responsive, hence some divs being hidden on adc_results.php
+ home.html is div-ed up for next-few-questions look (I think this can be done better with JS, but I haven't learned that yet), using JQuery functions from [adc_select.js](adc_select.js).<br /n>
<br />
Please let me know if you have any questions, or how I can improve the code or use best practices.  Thanks!
