Connect-VIServer -Server 192.168.0.26 -User root -Password tV2q0qx8VB

$NewVMParams = @{
   'Datastore' = 'datastore1'
   'MemoryGB' = 1
   'DiskGB' = 1
   'DiskStorageFormat' = 'Thin'
   'GuestId' = 'ubuntu64Guest'
   'NumCpu' = 1
   'Notes' = 'hacklab ssh prete a etre attaqué'
   }

$name = 'ssh'

$VM = New-VM -Name $name @NewVMParams

$getvm = Get-VM ssh

$nic = Get-NetworkAdapter -VM $getvm

$mac = '00:50:56:00:00:01'

$networkname = 'VM Network'

Remove-NetworkAdapter -NetworkAdapter $nic -Confirm:$false

New-NetworkAdapter -VM $getvm -MacAddress $mac -NetworkName $networkname -Type "vmxnet3" -StartConnected -Confirm:$false

Get-HardDisk -VM $name | Remove-HardDisk -DeletePermanently -Confirm:$false

Get-HardDisk -VM ssh_modele | Copy-HardDisk "[datastore1] $name/"

New-HardDisk -VM $VM -DiskPath "[datastore1] $name/hacklab1-000001.vmdk"

Start-VM $name