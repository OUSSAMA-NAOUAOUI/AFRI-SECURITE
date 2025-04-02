<!DOCTYPE html>
<html>
<head>
  <style>
    .loader {
      --s: 20px;
      --_d: calc(0.353*var(--s));
      width: calc(var(--s) + var(--_d));
      aspect-ratio: 1;
      display: none; /* Hidden by default */
      grid-area: 1/1;
    }
    .loader:before,
    .loader:after {
      content: "";
      grid-area: 1/1;
      clip-path: polygon(var(--_d) 0,100% 0,100% calc(100% - var(--_d)),calc(100% - var(--_d)) 100%,0 100%,0 var(--_d));
      background:
        conic-gradient(from -90deg at calc(100% - var(--_d)) var(--_d),
         #fff 135deg,#666 0 270deg,#aaa 0);
      animation: l6 2s infinite;
    }
    .loader:after {
      animation-delay:-1s;
    }
    @keyframes l6{
      0%  {transform:translate(0,0)}
      25% {transform:translate(30px,0)}
      50% {transform:translate(30px,30px)}
      75% {transform:translate(0,30px)}
      100%{transform:translate(0,0)}
    }
    
  </style>
</head>
<body>
  <div class="loader" style=""></div>
  
  <script>
    // Example usage
    const loader = document.querySelector('.loader');
    
    function showLoader() {
      loader.style.display = 'grid';
    }
    
    function hideLoader() {
      loader.style.display = 'none';
    }
    
    // Example: Show loader, then hide after 3 seconds
    showLoader();
    setTimeout(hideLoader, 3000);
  </script>
</body>
</html>