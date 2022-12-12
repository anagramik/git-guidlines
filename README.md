# git-guidlines

Each git commit message should be written in imperative and the format should be like this:

**_example:_**
```
// summary
[ACTION] short description

// description
Long description of the changes that occurred inside the commit
```
<hr>

**_example A:_**
```
[ADD] domains settings to Vessel model

This commit will add domain settings so our customers
don't have to resubmit their domain data each time a new campaign
is being launched.i

ticket #-TFA-1234
```
<hr>

**_example B:_**
```
[REMOVE] getAddressAttribute method from Vessel model

ticket #-TFA-1235
```
<hr>

**_example C:_**
```
[UPDATE] toArray method in Vessel model

This commit will remove the following parameters from toArray method:
- parameterA
- parameterB
- parameterC
- parameterD

ticket #-TFA-1236
```
<hr>