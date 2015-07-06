# Bonita BPM - Shopping Process
Design and implementation of three business processes: order products, process order and resolve a dispute.

Built with *BonitaBPMCommunity-6.5.2*.

------------------------------

**Organization** (LFM.xml)
* LFM
 * Administration (user: admin | pw: admin)
 * Consumers (user: consumer | pw: consumer)
 * Legal Department (user: lawyer | pw: lawyer)
 * Sales Department (user: sales | pw: sales)
 * Stock Department (user: stock | pw: stock)

------------------------------

## Installation guide

### Pre-BonitaBPM:
1. Copy consumers.xml to your home directory (e.g. `/home/fabio/`)

### BonitaBPM:
1. In the menu, go to Diagram. Import the file: Shopping-Process-1.0.bos
1. In the menu, go to Organization. Import the file: LFM.xml
2. In the menu, go to Organization > Publish. Select LFM and click the "Publish" button.
3. Select the pool "Order products" and click the "Run" button.


## License
Copyright (c) 2015 [Fábio Santos](http://www.fabiosantos.me) and [Rúben Nunes](https://github.com/Jounter). See the LICENSE file for license rights and limitations (MIT).
