const shareBtn = document.querySelector('.btn--share')

const sharePost = async (ev) => {
  const { target } = ev

  const postPermalink = target.getAttribute('data-post-permalink')
  const postTitle = target.getAttribute('data-post-title')

  let shareData = {
    title: postTitle,
    text: '',
    url: postPermalink,
  };

  try {
    await navigator.share(shareData);
  } catch (err) {
    alert('Não foi possível compartilhar')
  }

}

const handleShareBtn = () => {
  if (!navigator.canShare) {
    return
  }

  shareBtn.classList.toggle('btn--show')

  shareBtn.addEventListener('click', sharePost)

}

export const hasShareButton = () => {
  if (shareBtn) {
    handleShareBtn()
  }
}

