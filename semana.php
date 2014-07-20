<?php

$id_mes = $_GET['codigomes'];

switch($id_mes)
{
	case 1: $sem.="<option value='1'>1</option>
                       <option value='2'>2</option>
                       <option value='3'>3</option>
                       <option value='4'>4</option>
                       <option value='5'>5</option>"; break;

	case 2: $sem.="<option value='6'>6</option>
                       <option value='7'>7</option>
                       <option value='8'>8</option>
                       <option value='9'>9</option>"; break;

	case 3: $sem.="<option value='10'>10</option>
                       <option value='11'>11</option>
                       <option value='12'>12</option>
                       <option value='13'>13</option>
                       <option value='14'>14</option>"; break;
                   
	case 4: $sem.="<option value='15'>15</option>
                       <option value='16'>16</option>
                       <option value='17'>17</option>
                       <option value='18'>18</option>"; break;
                   
	case 5: $sem.="<option value='19'>19</option>
                       <option value='20'>20</option>
                       <option value='21'>21</option>
                       <option value='22'>22</option>"; break;

	case 6: $sem.="<option value='23'>23</option>
                       <option value='24'>24</option>
                       <option value='25'>25</option>
                       <option value='26'>26</option>
                       <option value='27'>27</option>"; break;
                   
	case 7: $sem.="<option value='28'>28</option>
                       <option value='29'>29</option>
                       <option value='30'>30</option>
                       <option value='31'>31</option>"; break;
        
	case 8: $sem.="<option value='32'>32</option>
                       <option value='33'>33</option>
                       <option value='34'>34</option>
                       <option value='35'>35</option>"; break;
                   
	case 9: $sem.="<option value='36'>36</option>
                       <option value='37'>37</option>
                       <option value='38'>38</option>
                       <option value='39'>39</option>
                       <option value='40'>40</option>"; break;
                   
	case 10: $sem.="<option value='41'>41</option>
                       <option value='42'>42</option>
                       <option value='43'>43</option>
                       <option value='44'>44</option>"; break;
                   
	case 11: $sem.="<option value='45'>45</option>
                       <option value='46'>46</option>
                       <option value='47'>47</option>
                       <option value='48'>48</option>"; break;
                   
	case 12: $sem.="<option value='49'>49</option>
                       <option value='50'>50</option>
                       <option value='51'>51</option>
                       <option value='52'>52</option>"; break;

	}
	
	echo $sem;
?>