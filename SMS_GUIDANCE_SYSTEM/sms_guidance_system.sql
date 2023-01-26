-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 03:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_guidance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_post`
--

CREATE TABLE `create_post` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` blob NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create_post`
--

INSERT INTO `create_post` (`id`, `title`, `author`, `description`, `image`, `category`, `date`) VALUES
(0, 'kenneth', 'kabineth', 'unang paanahon panahon pa ng hapon', 0xffd8ffe000104a46494600010100000100010000ffed008450686f746f73686f7020332e30003842494d04040000000000681c0228006246424d443061303030613730303130303030663030333030303039653036303030303963303730303030376230383030303032343062303030306138306530303030356430663030303037303130303030303538313130303030313531373030303000ffdb00430006040506050406060506070706080a100a0a09090a140e0f0c1017141818171416161a1d251f1a1b231c1616202c20232627292a29191f2d302d283025282928ffdb0043010707070a080a130a0a13281a161a2828282828282828282828282828282828282828282828282828282828282828282828282828282828282828282828282828ffc200110800ce00ce03012200021101031101ffc4001b00010001050100000000000000000000000004010203050607ffc4001a010100030101010000000000000000000000010304050206ffda000c03010002100310000001f5400000062d3f9f5b2d17996de2cebf67c16bfcd9ed15f02f62b33eed6dd3e4000000001831f134e9e9f53aaae4e865595aef81a9e92df75f352779598d5dfb0c35df8b75a8a7aafafdc79bc9bf27a2a0ced7cd0980001861ca6911f9bdd957618b1ea75faed5d94f431a2c94cbc3823c36f6c28d2db5747b2f3ea4e3c91abbf71dd79976fab9db71b39a000e73a3f3fa74eb71668383b33e367a3ce39766698c77df54e3c72290b704aacb533f2db3e6c83262f8ba76cb5b59f1e98d5ed3a9f3c12035be73e95e775df58da5d9e3ea49cbadd95765f9e349f3eaeadb726940bab6dc52cbec98831e3745a71727b4f4cd96be768b7a4f8000022701e943c72775fc860ebdd2a1cca35aec77a545117df8b318eda5c6c3b8e47aee87182ecc000000069384efbcff001752b3614dcdbadbf1dc9badada5d22367447cf83293fb8e3fb0e8f102da00000000d7f997a679863e94a971a465e85b75954e4b2ec65f9e3e645b4c914ec3a0e7fa0e970c2ca400000008be4febde4993a1332e2c98fa5452d4e7c77e2964cd1f399604f868ec77fa2def4b8416540000295a1503c93d6fca72efbefc77e2ea5b65d8932b15f8e62fcf16419f15d723abde68f79d2e1059500000a5682b4a8f2af54f2fcdb71dd6570f5d833c52663bac98bb347cc5f222653b9da6877dd3e007bac000052b42a079afa5797e7db1eec77e0ec5624b8a48ba3489f36e48f79254ce75dbdd66cfa9f3e1ebc00000a2a00e27b678b3cd367dbd69d3cadbd62cab8389e8eaedf2ca7a9d3c5be71b3ed6beabc19cd38424001fffc4002f100001040004050204070100000000000001000203040511303110121320211441062232341523243335404216ffda0008010100010502d2b1621aed7e3b41abfe868a8315a531073fea3e46b15abe191476639266fa12b2a814d35068a96a48ee57c461940208d6925646a4bec09f6e67adcab14e19d1c2635f8531370d85a9b1062c946e923316253354589c2e4c91920d2b3308627c85cecf4324471c94323a27d49c4f1e8e2f2e72e6822e0d1d5665d5674e59790bad64f9240c3ea067d41c924ac8dc5cc5970f7a53f467d095e238e47191f9fcca439d8678bc79bf0eb7994efe41dfc9193aafb2dea4524a5cc631bc951c5d5503c30d9bab077e332e51fb4de1a54ad2e5d20e5d3665d28d7237a92303d7463e9b58d07d3c611ac426343185336f7a12f4a7efbf2756d0533b960f6e0ddbb0764c728a3cca09cf6c630db2db557b711b2da94e2b11cc3de566622fda5eccdbb023c6dbdb1c0fb50c49f8848f756c0eeda761787330f6f6dbab0db8af7c39230faab159feb217c7424ead6e0ddbb4a1c318ccd7a7f0db7a752957a8346c578acc777e1bf156959a4d0bfd376edf66a3bd0ad1d897571c1f92137ea1b1edf66ef22c1cfe7eae303f45ed1efec50ec0bfd958478c4b5716fb076d1af628763549e1db8c1e3fd5eadf19d27151ec9c876354c98b081f26ae2233a2efa99b14e43b0297e86ac1ff006b56cf9acd4de0e4de2104ef2d0b07fb7d5907331a13514537814104172fcd8465e9f5b2f2d45393781410436937c23edb5a4fdd6a29c86e8a0826a3e5b83fdaeb59cdb65bc1c86e8a08207c82b0d1fa4d6bde6f0e057fa08a09a9c9a73583bf9abeb5f6f25d1c0a3b84f410dcf90ccc3b07672d4d6bf2f52d8411213d0fa776e7e334ddc10b0f939eb6b627873faada9328f0d99c861013f0809f854cd5e9666a3090ba6147166a1a32bcc3188a3feb6434ff00ffc40029110001030303030305010000000000000001000203041120123132213341104251131415306271ffda0008010301013f01c1ac73b60a38758e413a9b4eee0831c7a8fd1053fd5ea764ca68d9e3d1d046fea4214d10f0827c2c7f20a4a11ec44169b1c616686694e3608ca422f75d3a429d296a64ba8d8a0aba2f78c2919aa4ff0010445fa2d21690b484583e10606ec9aa501cd20a3d3d619cc27651d4c72794d7070b8ca7aa7447484f91f27239529bc632abee9ce87862554f74e741b1430f0aa3b873a03c93700a7ee1ce87729b8cfdc76743c8a6a3ea54bcce745cca08e125f51be714a623708d7c8765f752fca6d7c8375f90fe53ebde76165be1ffc40026110001030402010305000000000000000001000203041120311232102141421314305161ffda0008010201013f01c0b80da7bf87b212f2d34a240dfe0965e09d339de1b2bdba28cf21f7f02473749b527e481bfae2f77237405d08c141a2c83108ee9ccb78a67fc709dd66f806cb91572ae57228b89da298483e984910913e17b13858db28a10f1729a1acea329fbe5074cea3b650f419d4ec6517419d4fb238c5d06753a08e317419d469143067519d4754716eb37b03c58a14ac5f459fa46998bed7fa9b4ad1bc7fffc400381000010203040607060701000000000000010002031130122122310413415161711020324252729123336281a1b1144043738292d163ffda0008010100063f02a538f11ac1c4af7a5dc9a576a27f4526690c9ee75caefca62701cd3b50dd63f66c4e3a782e887be55da95fa1f45d96bfcad4c7e8ad2d00f62d19142d9d5bb71531957c6e016004aed59e4a67a26f6e2de15d11cbde39645dcca935a1a38744d8e2de45630d7fd1630e62c0e0ee54cbcfc9173b335a6c322a7de198a418326f4cdc6410339cf2920f9e13929592e205a32dcaceadfb4fa268912e7640260b2e9b9d67e69ce75c019201e6535da6faf5013d9371a2e79c8045c732874406ecbca89b9b0e7ea9b71c3ed3eabf1105d898d131bc150ff6ca67ed992d19e1b67da909f0c0266e392d12281375f77c968a3b40c3705089ce5d07a2c9ed32ea0d863bd79535686c33e8639b2b4d331342d133948cb6a75d73b34300b96b258f29a04cc11910ac59c39a12190904db33164da17a6eadf20d9ca637a6b46404ba267bc8207ba6e341c760b82211e155e7820e767f6e89c470038a6bd8eb52c27ad1233b60bb9ac0e40a734e4e0993ce55097e57057b81e015980c91396d2ade927543e3bcfa2706447bad676badabd21969b9ab7a0c4b5f0b8c8faad56970dd3e37145c1dd9be45027399a8c68bcb9e0263b4b88eb5b58dff0057b084d6f1db4ac4786d7b78a3f828800f0bff00d4e6e930eccdd86f9cea1115b3b043c73ad0cfc551fe5acee045423fe47ee2b44f97dea457fc007d4d68d3f0d48876ceb479780d489ceb459f84d4779ab39bbc495fb2ea524e978ab9a53de89f8abbfcc69ff235e30376334dbc6bc6f3d378f03c8af1b9ce9491778de5d5e2bb8f52eeb6589377b6eae62c16da69be4362f7313faabc06f98abe29f935618bead5706bb9157c3883f8abeee6b36faac333c84d5edb237b9063767e5f214fffc40029100100020103020602030101000000000001001121103141305161718191a1c120b1d1f0f140e1ffda0008010100013f21e97655d8ae6dfe737d415d8f541c12f13f3000a11e4ff903bf3b45171307058fe8395af0ae20cd7f9c4d6808400dedf640ef26b41e30ebb9ae3de02415c9d70bd1399603bddc11ce2ec6a2b60af7746703c933867d085df5104b5700fc1812f2d0ef22538078e528443c4b3e25c0ef15f4f230ec3bb130b6cb339707463ab694e95a05c85298c1d22fd61cf9b373146a40e598e56929b5ade6065ac5deda86e2813840664d05264dccbd67adf339c608d60779580ddefcea5d1e14b18042a52cc331d179cb89fa1e8f3b2a38b9ed853c425e65cdcbd70c7ee511b507aadfd4344c2c8e385fa5cb850738b3a658bc2f581c9b7bcb875cb9179aa88a53fd07f3531178b6dddc7c442d2cef0ab8c9da36c59920fb099c391e5c742cf657a045c7b1828e2bd1ce85923b60f7237dbbf555728cb01bd00b69081a8d857a6d173650dc768bb13b5d24c7cc1e59bef7de26d6e2170413563c30b95e1c0acae536db426c63a38d57fc42aa3625fce5e8553b9bdad15f5c8a9f29761efa1b6973aba1de3a031b0ee1eca60fd098fac4fdc2550286e0773f2417b4e55826e713739f68f9370c2dec097f0a0fe01dff0021db4dd12a7ab03a738cac25b3185be440565cdff8530baee2ab390e3f2a90be994a7b9302032567cb94d889c1ff005864385b03178327de731dc349dff026d991a11941039731b85fb503c2298ef35b5eae7a4d3b2676f2ed1b2a339fda286db150619da6e9b8d1779c6a477e8c64391f0a871d66afc53e2739969d661a90dde5140c5cb86cc96bd7ad63775f3369c94364df3647434b88c8cf32d6d81bad7617ff0084551b59c34ec8ce61384c5611ab847bf4faeb113659988f1d176355d09c21d98b107bf11f43ff007ac83ddf4457188d471da5c23c4170f12de07f1eb101b1bfda0ba7bce319b228eda9cc93c22a8ed8fea8eb78b8420c1bcd1b638ed16af0825ad86714c3fd1d7c33582d4dda364599c68789b228c68da2af78bf475e941b1fb34eed0e6f1a5c588f886c2b2419bdfae50ab187d742e66c8e471a76cdb288c9e7005392befd4e74e23f5a34ae66d9750b5d4c19884ed78bec3f7d7a43dfeece9e66d98cbd99b26c2281b1bc370667f60bc7d75d6a2aea7918fa8e64cdaac072b8ee9c91df2141da709f24b54ec423d505ceba1c64b71797688aaf8536aff33e094709f0bee2be8fea6c31e5bf312d7b83f5197e024361912955e2e8cf4fede26dfbcbbf8ffcff00e474ff00ffda000c030100020003000000100000000538092000000000087945afb25e49000007bd0ba86d07e8e800001641a566be01e680c000ee12fdfeeff61a82000031442e9f7fea80000000019e3c3a7f030000000004e9040d4f0400000000375c750a643000000500493ff92570c0000014a0f66759dfa2000000500026f8ebc1200000018011e708caac300003ffc4002611010002010205040301000000000000000100113120211041a1b1c15161719130e1f0d1ffda0008010301013f10d1ba3337603d9cca7710a8a8733f035d284c259f7de056d14a7719b0c00504c00c48aa9f46382a4d00ad12b3d04dd8f63eda85aa607a57ee21035b958c3fcc05ef5bd57d5f79607a577a7b91a82b6f03e66e95d7c4f8d14cb8ddfe4150cda17e253ca2eaa6627223f623a9843482c9c5c55873eb08da9eced08e261a5c898331dbbbb40ad03589f1eda19e2c733b0edad5a3dfc10cf1713018eff9e5ad6cfbcdeb1e26f1d7eba29f1e785e3cd3afd6b67e21da3c198675ceb5f57998686173af7beb2b462bcf007811c54039cb7f0173a804dfbf19b10183e7d5fa82d1754555b9d1ffc400251101000201030304030100000000000000010011212031711041613091a1b151d1f081ffda0008010201013f10d187550152de3686aa074152fa0350cb3b95712e095826017155b66f084684014db42d16cb98b952a0bfc7cdc1852f0fc42431dafeff0050aaf3f58fa619b1fecfea3896daff003459877c4dd88ac8a779e68160601b30da5062017741b2fa805b49ed14b4bf24465b9a86bb50daabcf78ab9748a5e63a461ace1c474130d61c91875efe843bb98a1d59f0358e84d1f0359c79d21bcc780d75a73d026862536af40001b6d98ea1db5913dbfbef10b57000a347ffc40029100100020103030403010003010000000001001121314151617181103091a120b1c1d140f0f1e1ffda0008010100013f10f68037ea35d86af88da2fd2be6842a26e5ae68c8a45ba6240e8d62589dff00e25519d122dcded931972f6df98a913f6e5f036a31c41c4b74103f0c4bcc571c6149af9510d005701a86e8117a104128652fd2b4f9a860d2c4b1f3efda9be4e5e3586ec6ff00f5a30abbff00a9afdc6087952d7cb329d239b66efcaefe6e5c50b853f907929d0e5400d9c1f054e938097df9f32e7460a14e4fa690b09ee3ed31f51c59ead579ff0012b106a8d3bf1edd5a864ee684bddc3c906aa1df125be81702a54219232c12a31451de2e91729a2709b9299152d68f2747da4d5420ef7d150b974b9926ab1e7a0982e02468b0065adf88d91027710fb7f7113710049abceadec70cb81a7b2550177587ab2d2114180b5b5000d5654d2140342ccb4cea6b51ba3f15cb4b14e96932354004356c2b1bc5b110a54744ce47a443525432387fc3fd961851dc3af86982258d9ec24b94fad6de74974243758a07fe987f9f33087e0bbcfebacc4f744b6155f2c3d5ed54535bad759317a90df0e1e0057971bf721cfa03e1a59c4b89e65a377f91505d84245cb46e9f52bf42eb6548e53189878ddfd334b3ba8806da31614ce94e3c452e29356b17f537b682f450f82dfb6271ff00d3597f72a6d3176aee7c63c7b1b3670f17cb5f11c26b9bb4bc17a26ef1febc454cbd9bc2a494959a4e389945966cdb862eeab218b955a24e80a0aba00c51064d029783435c86c3a457e02f84abaaf11445ad3d29a784d4952cd3c552f7a9793acb026302c6d35ddcdeb7104045287ab4dddff6094e1bb135444d36b3bc06dce1ad0460eb402b33f6923ad2e15cef02f33eef31958471d2e1f0fb1960f08c2fcb6c1afdc8f680c3ab1302d00fa6fc571a2f55357a4632f3ef69c53370f00681301cbbb0dadabc0fec4e1dba3f0e65fb03d82df929f3f92300a03840e5b7ea3c4b294abf5d5fc8f160021af7ad6189edbde429fd4758b47acfd9e8ba47d354c3305da3185f8e847eae3f23c86b1db183e606d75cf4c031f4c1025b35e7007ec9da628ee519c50350d6ae87e549828283104111cb1bb9940ec6a3cabbb0ab4d4c3b91d0f5fb8741587a269d6f4c4a63c50db243e120c3f2a6b471b11f4799bbd62b4956a4037435b4500e622156a78148553452ba73305de83c95cbe7d963e59cdb72b55d44621d1f312bc05e38b2f9638478958d053d35ad62b81a131f4c30eb36c47490df4e98b35d672b12dd6f38cfaedb26e7b6fab8829d3c5bff0026e7188f2703346215da698cb8b3321e62867998076821640dd656fefdb7d4d92d2fa68fec37b573323d23a92950b797989c4cfe2651d6504d02a0ce58a75abf4faba7b0faa4535afd0d49f0335b2ea0f31faa55140ea9995adef1f6677743f4f79e4a17ba993ec2321be50d777a451e26997145f6988a5a6142652e961fb7b7bfab5357c7b5a154686082945a662c4c46236151e379745b265122991136431d3d697fcf6f7f5be6aaa6b578e957454d43ac7551462f41d58facc1acc8b37c789934a1d16134b17ed9bbebb21f7027f6172b8e8dd30fa0598e325451431dd458da2c5b4ba982265b30a45040f6eddf5749ab0155e2dcc784598a3348b72e5c238b9748934c16f794336b9c5681fcf6cd5fc2a24348c6f8af3c973463a3d62b12aaf496adb59a885b0e902b096a9db01f83f99ab37af53a03036169f4df98e83c7a5778ca29e85622876a24c0bde04d5efbdac7f3db3567f1e9ac5c4c9f49afe45ea13e44c01bcc6ee2c1322454246107511a2b8d5f97f89f91bf7f5da50eab2f6a7f51622e3142cb30ddac3afa4750ac758fc63510d6d92bdd08ed617c85f3f89f91a7ab184ae93db460cc39f880a05bf52c8843b8e7ae65c7395193d8cd4c6e3c8e1641101894d883da556a2c0aaf15ed30d0fc11cceaedd7a939c696c7753c53fb19ae3f2b6bfebd488b6b2c40792ccb7439047da2049b79c77621f719d31caa3f3784185d45cf092a6e5920f035d8df5092b9b482bb16d7bd41c1ab2b55baeafb4e9f951c7e351075cf799ef37640028d3d834f4fffd9, 'wala lang', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `profiling`
--

CREATE TABLE `profiling` (
  `stud_id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year_section` int(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `nname` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_number` int(30) NOT NULL,
  `per_address` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `spouse` varchar(30) NOT NULL,
  `spuse_occupation` varchar(30) NOT NULL,
  `birth_order` int(30) NOT NULL,
  `brother` int(30) NOT NULL,
  `sister` int(30) NOT NULL,
  `living_with` varchar(30) NOT NULL,
  `name_of_father` varchar(30) NOT NULL,
  `name_of_mother` varchar(30) NOT NULL,
  `father_address` varchar(30) NOT NULL,
  `mother_address` varchar(30) NOT NULL,
  `father_nationality` varchar(30) NOT NULL,
  `mother_nationality` varchar(30) NOT NULL,
  `father_religion` varchar(30) NOT NULL,
  `mother_religion` varchar(30) NOT NULL,
  `father_educ` varchar(30) NOT NULL,
  `mother_educ` varchar(30) NOT NULL,
  `father_occupation` varchar(30) NOT NULL,
  `mother_occupation` varchar(30) NOT NULL,
  `father_company` varchar(30) NOT NULL,
  `mother_company` varchar(30) NOT NULL,
  `father_birthdate` date NOT NULL,
  `mother_birthdate` date NOT NULL,
  `father_contact` int(30) NOT NULL,
  `mother_contact` int(30) NOT NULL,
  `father_email` varchar(30) NOT NULL,
  `mother_email` varchar(30) NOT NULL,
  `name_of_gurdian` varchar(30) NOT NULL,
  `gurdian_relationship` varchar(30) NOT NULL,
  `gurdian_address` varchar(30) NOT NULL,
  `gurdian_contact` int(30) NOT NULL,
  `gurdian_email` varchar(30) NOT NULL,
  `emergency_person` varchar(30) NOT NULL,
  `emergency_contact` int(30) NOT NULL,
  `years` varchar(30) NOT NULL,
  `school_name_tertiary` text NOT NULL,
  `school_add_tertiary` text NOT NULL,
  `year_attended_tertiary` text NOT NULL,
  `honors_tertiary` text NOT NULL,
  `school_name_als` text NOT NULL,
  `school_add_als` text NOT NULL,
  `year_attended_als` date NOT NULL,
  `honors_als` text NOT NULL,
  `school_name_second` varchar(30) NOT NULL,
  `school_add_second` text NOT NULL,
  `year_attended_second` date NOT NULL,
  `honors_second` text NOT NULL,
  `schoo_name_elem` text NOT NULL,
  `school_add_elem` text NOT NULL,
  `year_attended_elem` date NOT NULL,
  `honors_elem` text NOT NULL,
  `name_of_org` text NOT NULL,
  `affilition` text NOT NULL,
  `affli_year` text NOT NULL,
  `affli_status` text NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `from_to` varchar(30) NOT NULL,
  `interest` text NOT NULL,
  `talent` text NOT NULL,
  `characteristic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiling`
--

INSERT INTO `profiling` (`stud_id`, `course`, `year_section`, `status`, `lname`, `fname`, `mname`, `nname`, `date_of_birth`, `gender`, `email`, `contact_number`, `per_address`, `nationality`, `civil_status`, `religion`, `spouse`, `spuse_occupation`, `birth_order`, `brother`, `sister`, `living_with`, `name_of_father`, `name_of_mother`, `father_address`, `mother_address`, `father_nationality`, `mother_nationality`, `father_religion`, `mother_religion`, `father_educ`, `mother_educ`, `father_occupation`, `mother_occupation`, `father_company`, `mother_company`, `father_birthdate`, `mother_birthdate`, `father_contact`, `mother_contact`, `father_email`, `mother_email`, `name_of_gurdian`, `gurdian_relationship`, `gurdian_address`, `gurdian_contact`, `gurdian_email`, `emergency_person`, `emergency_contact`, `years`, `school_name_tertiary`, `school_add_tertiary`, `year_attended_tertiary`, `honors_tertiary`, `school_name_als`, `school_add_als`, `year_attended_als`, `honors_als`, `school_name_second`, `school_add_second`, `year_attended_second`, `honors_second`, `schoo_name_elem`, `school_add_elem`, `year_attended_elem`, `honors_elem`, `name_of_org`, `affilition`, `affli_year`, `affli_status`, `company_name`, `position`, `from_to`, `interest`, `talent`, `characteristic`) VALUES
(19000000, 'BSIT', 4204, 'regular', 'JORQUIA', 'KENNETH', 'FABIA', 'KEN KEN', '2014-01-14', 'male', 'jorquiakenneth040@gmail.com', 2147483647, 'ph1 caloocan city', 'filipino', 'single', 'christian', 'marilyn', 'service crew', 1, -1, 0, 'Parents', 'reynaldo jorquia', 'marites fabia', 'ph1 caloocan', 'ph1 caloocan', 'filipino', 'filipino', 'catholic', 'catholic', 'asdfasdfasdf', 'jljl', 'asfasdf', 'ASDF', 'asdfasdf', 'ASDFASDFASDF', '2023-01-24', '2023-01-24', 2147483647, 2147483647, 'bongkse@gmail.com', 'tekya@gmail.com', 'marites fabia', 'mother', 'ph1 caloocan', 2147483647, 'sdgd@gmail.com', 'marites fabia', 2147483647, 'second degree', 'star elementary ', 'asdf', '2023-01-24', 'wala', 'wala', 'wala', '2023-01-24', 'wala', 'bagong silang high school', 'ph3 caloocan', '2023-01-13', 'wala', 'star elementary ', 'ph3 caloocan', '2023-01-25', 'wala', 'wala', 'wala', 'wala', 'wala', 'wala', 'wala', 'wala', 'Watching TV,Reading Books,Collecting Items,Shopping', 'Singing,Dancing,Painting', 'Stubborn,Patient,Talkative,Optimistic,Moody,Lazy,Quiet'),
(19022045, 'BSBA', 3201, 'irregular', 'EMBOTIDO', 'LANGONISA', 'HOTDOG', 'CHEESE', '0000-00-00', 'female', '', 0, '', '', '', '', '', '', 0, 0, 0, 'Guardian', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', 0, '', '', 0, 'transferee', '', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Watching TV,Reading Books', 'Singing,Dancing', 'Friendly,Optimistic,Lazy'),
(19022046, 'BSKL', 2301, 'regular', 'TAPSILOG', 'CHICKSILOG', 'HOTSILOG', 'BETSILOG', '0000-00-00', 'male', '', 0, '', '', '', '', '', '', 0, 0, 0, 'Guardian', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', 0, '', '', 0, 'transferee', '', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Hiking', 'Dramatic', 'Calm');

-- --------------------------------------------------------

--
-- Table structure for table `res_table`
--

CREATE TABLE `res_table` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `size` int(100) DEFAULT NULL,
  `downloads` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_table`
--

INSERT INTO `res_table` (`id`, `name`, `category`, `size`, `downloads`) VALUES
(1, 'Assessment-for-Module-9.docx', 'Evaluation', 13300, 5),
(2, 'Evaluation-for-Module-9.docx', 'Survey', 12875, 1),
(3, 'Assessment-for-Module-9 (1).docx', 'Evaluation', 13300, 0),
(4, 'Evaluation-for-Module-9 (1).docx', 'Research', 12875, 0),
(5, 'Private Cloud.pdf', 'Evaluation', 324039, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `mark` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `class`, `mark`) VALUES
(1, 'kenneth', 'two', 95),
(2, 'Marilyn', 'three', 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profiling`
--
ALTER TABLE `profiling`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `res_table`
--
ALTER TABLE `res_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profiling`
--
ALTER TABLE `profiling`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19022047;

--
-- AUTO_INCREMENT for table `res_table`
--
ALTER TABLE `res_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
