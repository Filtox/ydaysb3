Connect-VIServer -Server 192.168.0.26 -User root -Password tV2q0qx8VB

$NewVMParams = @{
   'Datastore' = 'datastore1'
   'MemoryGB' = 1
   'DiskGB' = 1
   'DiskStorageFormat' = 'Thin'
   'GuestId' = 'ubuntu64Guest'
   'NumCpu' = 1
   'Notes' = 'metasploitable2 prete a etre attaqué'
   }

$name = 'metasploitable2_pret'

$VM = New-VM -Name $name @NewVMParams

$getvm = Get-VM metasploitable2_pret

$nic = Get-NetworkAdapter -VM $getvm

$mac = '00:50:56:00:00:02'

$networkname = 'VM Network'

Remove-NetworkAdapter -NetworkAdapter $nic -Confirm:$false

New-NetworkAdapter -VM $getvm -MacAddress $mac -NetworkName $networkname -Type "vmxnet3" -StartConnected -Confirm:$false

Get-HardDisk -VM $name | Remove-HardDisk -DeletePermanently -Confirm:$false

Get-HardDisk -VM metasploitable2 | Copy-HardDisk "[datastore1] $name/"

New-HardDisk -VM $VM -DiskPath "[datastore1] $name/Metasploitable.vmdk"

Start-VM $name