<?php
include('conex.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cotizar</title>
	<meta charset="utf-8">
	<link rel="icon"  href="images/auto9'.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="css/cotiz.css" rel="stylesheet" type="text/css" />
</head>
<body >
	<form method="post">

		<div class="row">

      <div class="col-xl-12">
        <center>
		  <h3 class="font-italic" style="background-color: #3E52DF" >
		  <img src="images/80.png" width="60">El seguro de auto ya es obligatorio. Evita multa de hasta $4,000</h3>
      </div>

</div>

<div class="row">

      <div class="col-xl-12">
        <center>
		  <h3 class="font-italic" style="background-color: #FFFFFF" >
		  <img src="images/45.jpg" width="250" style="font-size: left">El seguro de auto ya es obligatorio. Evita multa de hasta $4,000  <img src="images/45.jpg" width="250" style="font-size: right"></h3>
      </div>

</div>

<div class="row">

      <div class="col-md-5"  style="background-color: #FFFFFF">
        <img src="images/azul.jpg" width="600">
</div>

<div class="col-md-7"  style="background-color: #FFFFFF">
<br>
<div class="container">
    <div class="row">
    	 <div class="col-xl-12"  style="background-color:#FFFFFF">
</div>
</div>
</div>

		<div class="card" style="width:800px" style="align-content: right">
    <div class="card-body">
<div class="container">
    <div class="row">
    	 <div class="col-xl-12"  style="background-color:#FFFFFF">
</div>
</div>
</div>



<div class="row">
      <div class="col-md-6" style="background-color: #FFFFFF" >
 <select class="form-control" id="marca" name="marca"> 
               <a class="dropdown-item" href="#">Marca</a>
                <option>Marca</option>
				<option>NISSAN</option>
				<option>CHEVROLET</option>
				<option>VOLKSWAGEN</option>
				<option>HONDA</option>
				<option>KIA</option>
				<option>MAZDA</option>
				<option>TOYOTA</option>
				<option>ACURA</option>
				<option>ALFA ROMEO</option>
				<option>ASTON MARTI</option>
				<option>AUDI</option>
				<option>BAIC</option>
				<option>BENTLEY</option>
				<option>BMW</option>
				<option>BUICK</option>
				<option>CADILLAC</option>
				<option>CHANGAN</option>
  			</select> 
  </div>

  <div class="col-md-6" style="background-color: #FFFFFF" >
      <select class="form-control" id="modelo" name="modelo"> 
               <a class="dropdown-item" href="#">Modelo</a>
                <option>Modelo</option>
				<option>2019</option>
				<option>2018</option>
				<option>2017</option>
				<option>2016</option>
				<option>2015</option>
				<option>2014</option>
				<option>2013</option>
				<option>2012</option>
				<option>2011</option>
				<option>2010</option>
				<option>2009</option>
				<option>2008</option>
				<option>2007</option>
				<option>2006</option>
				<option>2005</option>
  			</select> 
  </div>

  
</div>

<div class="row">
 <div class="col-md-4" style="background-color: #FFFFFF" >
 	<br>
     <select class="form-control" id="edad" name="edad"> 
               <a class="dropdown-item" href="#">Edad</a>
				<option >Edad</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>28</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
				<option>32</option>
				<option>33</option>
				<option>34</option>
				<option>35</option>
				<option>36</option>
				<option>37</option>
				<option>38</option>
				<option>39</option>
				<option>40</option>
				<option>42</option>
				<option>43</option>
				<option>44</option>
				<option>45</option>
				<option>46</option>
				<option>47</option>
				<option>48</option>
				<option>50</option>
				<option>51</option>
				<option>52</option>
				<option>53</option>
				<option>54</option>
				<option>55</option>
				<option>56</option>
				<option>57</option>
				<option>58</option>
				<option>59</option>
				<option>60</option>
				<option>61</option>
				<option>62</option>
				<option>63</option>
				<option>64</option>
				<option>66</option>
				<option>67</option>
				<option>68</option>
				<option>69</option>
				<option>70</option>
				<option>71</option>
				<option>72</option>
				<option>73</option>
				<option>74</option>
				<option>75</option>
				<option>76</option>
				<option>78</option>
				<option>80</option>
				<option>81</option>
				<option>82</option>
				<option>83</option>
				<option>84</option>
				<option>85</option>
				<option>86</option>
				<option>87</option>
				<option>89</option>
				<option>90</option>
				<option>91</option>
				<option>92</option>
				<option>93</option>
				<option>94</option>
				<option>95</option>
				<option>96</option>
				<option>97</option>
				<option>98</option>
				<option>99</option>
				
  			</select> 
  </div>

   <div class="col-md-4" style="background-color: #FFFFFF" >
   	<br>
     <select class="form-control" id="sexo" name="sexo"> 
               <a class="dropdown-item" href="#">Genero</a>
                <option>Genero</option>
				<option>Hombre</option>
				<option>Mujer</option>
  			</select> 
  </div>

  <div class="col-md-4" style="background-color: #FFFFFF" >
     <div class="form-group">
  <label for="usr"></label>
  <input type="text" class="form-control" id="ingreso" name="ingreso" placeholder="Ingreso Mensual">
</div>
  </div>

</div>

<div class="row">
<div class="col-md-6" style="background-color: #FFFFFF" >
     <div class="form-group">
  <label for="usr"></label>
  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
</div>
  </div>


<div class="col-md-6" style="background-color: #FFFFFF" >
     <div class="form-group">
  <label for="usr"></label>
  <input type="text" class="form-control" id="correo" name="correo" placeholder="correo">
</div>
  </div>


</div>

<div class="row">
<div class="col-md-6" style="background-color: #FFFFFF" >
     <div class="form-group">
  <label for="usr"></label>
  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
</div>
  </div>




</div>

<br>
<div class="row">
<div class="col-md-12" style="background-color: #FFFFFF" >
<center>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
    <label class="custom-control-label" for="customCheck">Acepto que he leído el <b><font color="blue">Aviso de privacidad</b></font></label>
  </div>
</center>
</div>
</div>

<br>
 <div class="col-xl-12"  style="background-color:#FFFFFF">
        <center>
   <button  type="submit" style="" name="registrar" id="registrar" class="btn btn-success btn-block">

           Ver precios de mi seguro <img src="images/12.png" width="60">      </button>
</center>
<br>
</div>
	
	<?php
		         if (isset($_POST['cotizacion']))
				 {
					 	 	
					 if (!empty($_POST['correo']))
					 {
						 mysqli_query($cnx, "INSERT into seguro_autos values
							 ( '$_POST[marca]',
							  '$_POST[modelo]',
							  '$_POST[edad]',
							  '$_POST[genero]',
							  '$_POST[ingreso]',
							  '$_POST[nombre]',
							  '$_POST[email]',
							  '$_POST[telefono]',)");
							  
					 }
				 }
		  
		        ?>
	</div>
	</div>
</div>
</div>
</center>
</form>
</body>
</html>