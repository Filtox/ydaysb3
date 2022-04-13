Connect-VIServer -Server 192.168.0.26 -User root -Password tV2q0qx8VB

$name = 'metasploitable2'

Stop-VM -VM $name -Confirm:$false