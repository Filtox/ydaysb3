Connect-VIServer -Server 192.168.0.26 -User root -Password tV2q0qx8VB

$name = 'ssh'

Stop-VM -VM $name -Confirm:$false

Remove-VM -VM $name -DeletePermanently -Confirm:$false