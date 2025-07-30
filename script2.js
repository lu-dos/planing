document.addEventListener('DOMContentLoaded',()=>{
  // checkbox persistence
  document.querySelectorAll('input[type=checkbox]').forEach(chk=>{
    const dateCell=chk.closest('tr')?.querySelector('.jour');
    if(!dateCell) return;
    const key='chk-'+dateCell.textContent.trim();
    chk.checked=localStorage.getItem(key)==='1';
    chk.setAttribute('aria-checked',chk.checked);
    chk.addEventListener('change',()=>{
      localStorage.setItem(key,chk.checked?'1':'0');
      chk.setAttribute('aria-checked',chk.checked);
    });
  });

  // navigation vers les semaines
  const weekSelect=document.getElementById('weekSelect');
  if(weekSelect){
    weekSelect.addEventListener('change',()=>{
      const target=document.querySelector(weekSelect.value);
      if(target) target.scrollIntoView({behavior:'smooth'});
    });
  }
  document.getElementById('printTopBtn').onclick=()=>window.print();

  // top button
  const topBtn=document.getElementById('toTop');
  const toggle=()=>window.scrollY>600?topBtn.classList.add('show'):topBtn.classList.remove('show');
  window.addEventListener('scroll',toggle);
  toggle();
  topBtn.onclick=()=>window.scrollTo({top:0,behavior:'smooth'});

  // print
  document.getElementById('printBtn').onclick=()=>window.print();
});

// PWA (optional)
if('serviceWorker' in navigator){
  navigator.serviceWorker.register('sw.js').catch(()=>{});
}
