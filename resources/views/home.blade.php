@include('header')
  <body class="body-ape" cz-shortcut-listen="true">
    
    <div id="vantafog" class="fluid-bg"><canvas style="position: absolute; z-index: 0; top: 0px; left: 0px; width: 1349px; height: 635px;" class="vanta-canvas" width="674" height="317"></canvas></div>
    <div class="meta-bg meta-opacity">
      <div class="ml-bottom"></div>
      <div class="ml-sun"></div>
    </div>
    <div class="main">
      <!--  -->
     @include('menu')
      <div class="first-2">

       <div data-w-id="89f095dc-caf7-46ab-58a4-eb2582532690" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg); opacity: 1; transform-style: preserve-3d;" class="main-description-2">
          <div class="subtitle-bold inmob">DESI BANKS &amp; FRIENDS OFFICIAL COLLABORATION<br></div>
          <div class="main-heading">Funny Ape Club</div>
          <div class="subtitle-bold inmob">Generate your Funny Ape<br></div>
          <div class="maincard downside-0">
            <div class="img-card"><img src="{{url('image')}}/default.png" loading="lazy" sizes="(max-width: 479px) 218px, 293px" srcset="{{url('image')}}/default.png 500w, {{url('image')}}/default.png 600w" alt="" class="base-card-img"></div>
            <div class="grad-card">
            </div>
            <div class="home-nft-eth">
              <p class="paragraph-40">Mint Price :  0.1 ETH</p>
            </div>
          </div>
          <div class="div-block-343" id="mintbut" style="display: none;"><a href="javascript:;" class="base-btn colorful-green" onclick="mint()">Mint</a>

          </div>
          <div class="div-block-343" id="loadbut" style="display: none;">
           <img src="https://marsleevamedicity.com/wp-content/uploads/2021/01/loading-please-wait-icon-22.gif" width="200px">
         </div>
        </div>

        
    
             
        
      </div>
      
      
      
      
      
     
      
      @include('footer')
    </div>
   @include('footer_script')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.2.11/web3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bignumber.js/8.0.2/bignumber.js"></script>

    <script type="text/javascript">
       var currentAccount;
       function start() {

      if (typeof web3 !== 'undefined'){
    console.log('MetaMask is installed')
    web3 = new Web3(web3.currentProvider);
    connect();
  }
  else{
    console.log('MetaMask is not installed')
  }

}

      function connect() {

    var provider=getCookie('provider');

    if(provider=='metamask' || provider=="")
    {
        ethereum.on('accountsChanged', handleAccountsChanged);
 ethereum.autoRefreshOnNetworkChange = false;
  getnetwork();
  ethereum.request({ method: 'eth_requestAccounts' }).then(handleAccountsChanged).catch((err) => {
      if (err.code === 4001) {
        // EIP-1193 userRejectedRequest error
        // If this happens, the user rejected the connection request.
        console.log('Please connect to MetaMask.');

      } else {
        console.error(err);
      }
    });
    }
}

function getnetwork()
{
    ethereum.request({ method: 'eth_chainId' }).then((res) => {
      switch (web3.utils.hexToNumber(res)) {
    case 1:
    console.log('Mainnet')
      break
    default:
      //alert('Change to Ethereum Mainnet');
  }
});
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


function handleAccountsChanged(accounts) {
  if (accounts.length === 0) {
    // MetaMask is locked or the user has not connected any accounts
    console.log('Please connect to MetaMask.');
  } else  {
    currentAccount = accounts[0];
   console.log(currentAccount);
   $("#wallet_addr").html('<button class="common-link yellow-style">'+currentAccount+'</button>');
   $("#mintbut").show();
  }
}


function mint()
{
  var contract_addr='0x6Aad6d973394CEcA06b5D95b1c040d01b9C7EAe2';
  var abi =[{"inputs":[{"internalType":"string","name":"_BaseURI","type":"string"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"approved","type":"address"},{"indexed":true,"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"operator","type":"address"},{"indexed":false,"internalType":"bool","name":"approved","type":"bool"}],"name":"ApprovalForAll","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"uint256","name":"index","type":"uint256"},{"indexed":true,"internalType":"address","name":"minter","type":"address"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[],"name":"SaleBegins","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":true,"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[],"name":"BaseURI","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"numberOfNfts","type":"uint256"}],"name":"Ownermint","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"TOKEN_LIMIT","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_approved","type":"address"},{"internalType":"uint256","name":"_tokenId","type":"uint256"}],"name":"approve","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"_owner","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"bytes32","name":"","type":"bytes32"}],"name":"cancelledOffers","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"contractSealed","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"ethBalance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"_tokenId","type":"uint256"}],"name":"getApproved","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"imageHash","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_owner","type":"address"},{"internalType":"address","name":"_operator","type":"address"}],"name":"isApprovedForAll","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"marketPaused","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"numberOfNfts","type":"uint256"}],"name":"mint","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[],"name":"mintPrice","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"mintsRemaining","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"_name","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"_tokenId","type":"uint256"}],"name":"ownerOf","outputs":[{"internalType":"address","name":"_owner","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"bool","name":"_paused","type":"bool"}],"name":"pauseMarket","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"publicSale","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_from","type":"address"},{"internalType":"address","name":"_to","type":"address"},{"internalType":"uint256","name":"_tokenId","type":"uint256"}],"name":"safeTransferFrom","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"_from","type":"address"},{"internalType":"address","name":"_to","type":"address"},{"internalType":"uint256","name":"_tokenId","type":"uint256"},{"internalType":"bytes","name":"_data","type":"bytes"}],"name":"safeTransferFrom","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"saleStartTime","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"sealContract","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"_operator","type":"address"},{"internalType":"bool","name":"_approved","type":"bool"}],"name":"setApprovalForAll","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"string","name":"_baseURI","type":"string"}],"name":"setBaseURI","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address payable","name":"_addr","type":"address"}],"name":"setMarketingAddr","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_price","type":"uint256"}],"name":"setMintprice","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"startSale","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"bytes4","name":"_interfaceID","type":"bytes4"}],"name":"supportsInterface","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"_symbol","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"index","type":"uint256"}],"name":"tokenByIndex","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"pure","type":"function"},{"inputs":[{"internalType":"address","name":"_owner","type":"address"},{"internalType":"uint256","name":"_index","type":"uint256"}],"name":"tokenOfOwnerByIndex","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"_tokenId","type":"uint256"}],"name":"tokenURI","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_from","type":"address"},{"internalType":"address","name":"_to","type":"address"},{"internalType":"uint256","name":"_tokenId","type":"uint256"}],"name":"transferFrom","outputs":[],"stateMutability":"nonpayable","type":"function"}];

$("#mintbut").hide();
$("#loadbut").show();
  var contract = new web3.eth.Contract(abi,contract_addr);
  contract.methods.mint(1).send({from:currentAccount,value:10e16}).then((txHash)=>{

      console.log(txHash.transactionHash);
      getreceipt12(txHash.transactionHash);
      $("#mintbut").show();
      $("#loadbut").hide();
       contract.methods.balanceOf(currentAccount).call().then((result)=>{
      var tokenIndex=parseInt(result) - 1 ;
      contract.methods.tokenOfOwnerByIndex(currentAccount,tokenIndex).call().then((tokenID)=>{
        console.log(tokenID);
        window.location.href='<?php echo url("token") ?>/'+tokenID;
      })
     })
  })

  
}

  function getreceipt12(hash){
       web3.eth.getTransactionReceipt(hash, function(err, data) {
       if(data==null){
        console.log('checking...')
        getreceipt12(hash);
       }else{
        console.log(data);
       }

       });
     }
    </script>
  

</body></html>