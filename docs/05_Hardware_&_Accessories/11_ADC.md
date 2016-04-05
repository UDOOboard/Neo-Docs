## Turn off M4 core
By default, ADC pins (`A0`-`A5`) are assigned to the M4 core, so they can be used by Arduino.

If you want, you can use the ADC pins from Linux; however you must disable the M4 core. Follow this [guide](../Cookbook_Linux/Turn_off_M4_Arduino_core.html) to disable the M4 core startup.


## Read ADC Data
You can read ADC values from virtual files in the `sysfs`:

    /sys/bus/iio/devices/


UDOO Neo has ADC banks, `adc1` and `adc2`:

    adc1 -> /sys/bus/iio/devices/iio\:device0/
    adc2 -> /sys/bus/iio/devices/iio\:device1/

The corresponding pin values are located in:

``` bash
A0 ->  /sys/bus/iio/devices/iio\:device0/in_voltage0_raw
A1 ->  /sys/bus/iio/devices/iio\:device0/in_voltage1_raw
A2 ->  /sys/bus/iio/devices/iio\:device0/in_voltage2_raw
A3 ->  /sys/bus/iio/devices/iio\:device0/in_voltage3_raw
A4 ->  /sys/bus/iio/devices/iio\:device1/in_voltage0_raw
A5 ->  /sys/bus/iio/devices/iio\:device1/in_voltage1_raw
```

If you want to read the `A0` pin numeric value, access its file:

    cat /sys/bus/iio/devices/iio\:device0/in_voltage0_raw

If you want the analogic value expressed in millivolts instead of int, you can multiply the `in_voltageX_raw` file for the `in_voltage_scale` file


### Example: read A0

The following examples read the A0 integer values, multiplies it for the ADC scale and prints the result to the console:

<div>
 <ul id="adc-examples" class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#bash-example" aria-controls="bash" role="tab" data-toggle="tab">Bash</a></li>
  <li role="presentation"><a href="#php-example" aria-controls="php" role="tab" data-toggle="tab">PHP</a></li>
  <li role="presentation"><a href="#python-example" aria-controls="python" role="tab" data-toggle="tab">Python</a></li>
 </ul>

 <div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="bash-example">

``` bash
raw=$(</sys/bus/iio/devices/iio\:device0/in_voltage0_raw)
scale=$(</sys/bus/iio/devices/iio\:device0/in_voltage_scale)
echo "$raw * $scale" | bc -l 
3299.194333890
```

  </div>
  <div role="tabpanel" class="tab-pane" id="php-example">

``` php
<?php
$raw = file_get_contents("/sys/bus/iio/devices/iio:device0/in_voltage0_raw");
$scale = file_get_contents("/sys/bus/iio/devices/iio:device0/in_voltage_scale");
echo $raw*$scale . PHP_EOL;
```

  </div>
  <div role="tabpanel" class="tab-pane" id="python-example">

``` python
raw = int(open("/sys/bus/iio/devices/iio:device0/in_voltage0_raw").read())
scale = float(open("/sys/bus/iio/devices/iio:device0/in_voltage_scale").read())

print raw*scale
```

  </div>
 </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
<script>
$('#adc-examples a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>








## Precision 
Analog inputs have a 12 bit precision (from `0` to `4095`)
