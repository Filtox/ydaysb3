Connect-VIServer -Server 192.168.0.26 -User root -Password tV2q0qx8VB

$NewVMParams = @{
   'Datastore' = 'datastore1'
   'DiskGB' = 1
   'DiskStorageFormat' = 'Thin'
   'MemoryGB' = 1
   'GuestId' = 'ubuntu64Guest'
   'NumCpu' = 1
   'Notes' = 'hacklab vierge copy script'
   }

$name = "hacklab_vierge_copy"

$VM = New-VM -Name $name @NewVMParams

Get-HardDisk -VM $name | Remove-HardDisk -DeletePermanently -Confirm:$false

Get-HardDisk -VM hacklab_vierge | Copy-HardDisk "[datastore1] $name/"

New-HardDisk -VM $VM -DiskPath "[datastore1] $name/hacklab1-000001.vmdk"