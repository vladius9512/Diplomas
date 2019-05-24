/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Dan
 * Created: Mar 4, 2018
 */

--USE [Diplome2017_CiBonfire_StudentiMI];

IF NOT EXISTS(SELECT 1 FROM sys.columns 
              WHERE Name = N'deleted' AND Object_ID = Object_ID(N'dbo.diplomas_config'))
BEGIN
    ALTER TABLE [Diplome2017_CiBonfire_StudentiMI].[dbo].[diplomas_config] ADD deleted bit;
END

-- uncomment this if you want old FormulaAdresareSufix to be updated as FormulaAdresareSufixF
/*IF EXISTS(SELECT TOP 1 * FROM [Diplome2017_CiBonfire_StudentiMI].[dbo].[diplomas_config_fields]
          WHERE [Diploma_Field_Name] = 'Graduate_025_FormulaAdresareSufix')
BEGIN
    UPDATE [Diplome2017_CiBonfire_StudentiMI].[dbo].[diplomas_config_fields]
    SET [Diploma_Field_Name] = 'Graduate_025_FormulaAdresareSufixF'
    WHERE [Diploma_Field_Name] = 'Graduate_025_FormulaAdresareSufix'
END*/

GO
ALTER VIEW [dbo].[diplomas_codes_2_graduate]
AS
SELECT        dbo.diplomas_codes.Diploma_Code_Value, dbo.diplomas_codes.Diploma_Code_Status, dbo.diplomas_graduates.Gratuate_ID, dbo.diplomas_graduates.Diploma_Config_Id,
                             (SELECT        Diploma_Config_Title
                               FROM            dbo.diplomas_config
                               WHERE        (Diploma_Config_Id = dbo.diplomas_graduates.Diploma_Config_Id)) AS Diploma_Config_Title, dbo.diplomas_graduates.status, dbo.diplomas_graduates.ID_Student, 
                         dbo.diplomas_graduates.ID_AnUniv, dbo.diplomas_graduates.NrInregistrare, dbo.diplomas_graduates.Graduate_001_NrCrediteProgram, dbo.diplomas_graduates.Graduate_002_SesiuneExamenAbsolvire, 
                         dbo.diplomas_graduates.Graduate_003_AnExamenAbsolvire, dbo.diplomas_graduates.Graduate_004_DenumireProba1, dbo.diplomas_graduates.Graduate_005_NrCrediteProba1, 
                         dbo.diplomas_graduates.Graduate_006_Nota1, dbo.diplomas_graduates.Graduate_007_NotaInCifreSiLitere1, dbo.diplomas_graduates.Graduate_008_DenumireProba2, 
                         dbo.diplomas_graduates.Graduate_009_NrCrediteProba2, dbo.diplomas_graduates.Graduate_010_Nota2, dbo.diplomas_graduates.Graduate_011_NotaInCifreSiLitere2, 
                         dbo.diplomas_graduates.Graduate_012_NumeIntreg, dbo.diplomas_graduates.Graduate_013_DataNastere, dbo.diplomas_graduates.Graduate_014_ZiNastere, 
                         dbo.diplomas_graduates.Graduate_015_LunaNastere, dbo.diplomas_graduates.Graduate_016_AnNastere, dbo.diplomas_graduates.Graduate_017_LunaNastereInLitere, 
                         dbo.diplomas_graduates.Graduate_018_MedieFinalaAbsolvire, dbo.diplomas_graduates.Graduate_019_DenumireTaraNastere, dbo.diplomas_graduates.Graduate_020_DenumireLocalitateNastere, 
                         dbo.diplomas_graduates.Graduate_021_DenumireJudetNastere, dbo.diplomas_graduates.Graduate_022_FormulaAdresare, dbo.diplomas_graduates.Graduate_024_FormulaAdresareArticulat, 
                         dbo.diplomas_graduates.Graduate_025_FormulaAdresareSufixF, dbo.diplomas_graduates.Graduate_026_DenumireDomeniu, dbo.diplomas_graduates.Graduate_027_DenumireSpecializare, 
                         dbo.diplomas_graduates.Graduate_028_DenumireProgramDeStudii, dbo.diplomas_graduates.Graduate_029_Universitate, dbo.diplomas_graduates.Graduate_030_UniversitateArticulat, 
                         dbo.diplomas_graduates.Graduate_031_Facultate, dbo.diplomas_graduates.Graduate_032_FormaInvatamant, dbo.diplomas_graduates.Graduate_033_CicluDeStudii, 
                         dbo.diplomas_graduates.Graduate_034_LimbaPredare, dbo.diplomas_graduates.Graduate_035_NumeRector, dbo.diplomas_graduates.Graduate_036_NumeSecretarSefUniversitate, 
                         dbo.diplomas_graduates.Graduate_037_NumeDecan, dbo.diplomas_graduates.Graduate_038_NumeSecretarSefFacultate, dbo.diplomas_graduates.Graduate_039_DurataStudiilor, 
                         dbo.diplomas_graduates.Graduate_040_FacultateArticulat, dbo.diplomas_graduates.Graduate_041_MedieFinalaAbsolvireCifre, dbo.diplomas_graduates.Graduate_042_TitlulObtinut,
                         dbo.diplomas_graduates.Graduate_043_FormulaAdresareSufixM,dbo.diplomas_graduates.Graduate_044_PrenumeTata,dbo.diplomas_graduates.Graduate_045_PrenumeMama,dbo.diplomas_graduates.Graduate_046_CNP,
                         dbo.diplomas_graduates.Field_001_Value, dbo.diplomas_graduates.Field_002_Value, dbo.diplomas_graduates.Field_003_Value, dbo.diplomas_graduates.Field_004_Value, 
                         dbo.diplomas_graduates.Field_005_Value, dbo.diplomas_graduates.Field_006_Value, dbo.diplomas_graduates.Field_007_Value, dbo.diplomas_graduates.Field_008_Value, 
                         dbo.diplomas_graduates.Field_009_Value, dbo.diplomas_graduates.Field_010_Value, dbo.diplomas_graduates.Field_011_Value, dbo.diplomas_graduates.Field_012_Value, 
                         dbo.diplomas_graduates.Field_013_Value, dbo.diplomas_graduates.Field_014_Value, dbo.diplomas_graduates.Field_015_Value, dbo.diplomas_graduates.Field_016_Value, 
                         dbo.diplomas_graduates.Field_017_Value, dbo.diplomas_graduates.Field_018_Value, dbo.diplomas_graduates.Field_019_Value, dbo.diplomas_graduates.Field_020_Value, 
                         dbo.diplomas_graduates.Field_021_Value, dbo.diplomas_graduates.Field_022_Value, dbo.diplomas_graduates.Field_023_Value, dbo.diplomas_graduates.Field_024_Value, 
                         dbo.diplomas_graduates.Field_025_Value, dbo.diplomas_graduates.Field_026_Value, dbo.diplomas_graduates.Field_027_Value, dbo.diplomas_graduates.Field_028_Value, 
                         dbo.diplomas_graduates.Field_029_Value, dbo.diplomas_graduates.Field_030_Value
FROM            dbo.diplomas_codes LEFT OUTER JOIN
                         dbo.diplomas_graduates ON dbo.diplomas_graduates.Diploma_Code_Value = dbo.diplomas_codes.Diploma_Code_Value

GO
ALTER VIEW [dbo].[diplomas_graduates_2_diploma_and_code]
AS
SELECT        dbo.diplomas_graduates.Gratuate_ID, dbo.diplomas_graduates.status, dbo.diplomas_graduates.ID_Student, dbo.diplomas_graduates.Diploma_Code_Value, dbo.diplomas_codes.Diploma_Code_Status, 
                         dbo.diplomas_graduates.Diploma_Config_Id, dbo.diplomas_config.Diploma_Config_Title, dbo.diplomas_graduates.ID_AnUniv, dbo.diplomas_graduates.NrInregistrare, 
                         dbo.diplomas_graduates.Graduate_001_NrCrediteProgram, dbo.diplomas_graduates.Graduate_002_SesiuneExamenAbsolvire, dbo.diplomas_graduates.Graduate_003_AnExamenAbsolvire, 
                         dbo.diplomas_graduates.Graduate_004_DenumireProba1, dbo.diplomas_graduates.Graduate_005_NrCrediteProba1, dbo.diplomas_graduates.Graduate_006_Nota1, 
                         dbo.diplomas_graduates.Graduate_007_NotaInCifreSiLitere1, dbo.diplomas_graduates.Graduate_008_DenumireProba2, dbo.diplomas_graduates.Graduate_009_NrCrediteProba2, 
                         dbo.diplomas_graduates.Graduate_010_Nota2, dbo.diplomas_graduates.Graduate_011_NotaInCifreSiLitere2, dbo.diplomas_graduates.Graduate_012_NumeIntreg, 
                         dbo.diplomas_graduates.Graduate_013_DataNastere, dbo.diplomas_graduates.Graduate_014_ZiNastere, dbo.diplomas_graduates.Graduate_015_LunaNastere, 
                         dbo.diplomas_graduates.Graduate_016_AnNastere, dbo.diplomas_graduates.Graduate_017_LunaNastereInLitere, dbo.diplomas_graduates.Graduate_018_MedieFinalaAbsolvire, 
                         dbo.diplomas_graduates.Graduate_019_DenumireTaraNastere, dbo.diplomas_graduates.Graduate_020_DenumireLocalitateNastere, dbo.diplomas_graduates.Graduate_021_DenumireJudetNastere, 
                         dbo.diplomas_graduates.Graduate_022_FormulaAdresare, dbo.diplomas_graduates.Graduate_024_FormulaAdresareArticulat, dbo.diplomas_graduates.Graduate_025_FormulaAdresareSufixF, 
                         dbo.diplomas_graduates.Graduate_026_DenumireDomeniu, dbo.diplomas_graduates.Graduate_027_DenumireSpecializare, dbo.diplomas_graduates.Graduate_028_DenumireProgramDeStudii, 
                         dbo.diplomas_graduates.Graduate_029_Universitate, dbo.diplomas_graduates.Graduate_030_UniversitateArticulat, dbo.diplomas_graduates.Graduate_031_Facultate, 
                         dbo.diplomas_graduates.Graduate_032_FormaInvatamant, dbo.diplomas_graduates.Graduate_033_CicluDeStudii, dbo.diplomas_graduates.Graduate_034_LimbaPredare, 
                         dbo.diplomas_graduates.Graduate_035_NumeRector, dbo.diplomas_graduates.Graduate_036_NumeSecretarSefUniversitate, dbo.diplomas_graduates.Graduate_037_NumeDecan, 
                         dbo.diplomas_graduates.Graduate_038_NumeSecretarSefFacultate, dbo.diplomas_graduates.Graduate_039_DurataStudiilor, dbo.diplomas_graduates.Graduate_040_FacultateArticulat, 
                         dbo.diplomas_graduates.Graduate_041_MedieFinalaAbsolvireCifre, dbo.diplomas_graduates.Graduate_042_TitlulObtinut, 
                         dbo.diplomas_graduates.Graduate_043_FormulaAdresareSufixM,dbo.diplomas_graduates.Graduate_044_PrenumeTata,dbo.diplomas_graduates.Graduate_045_PrenumeMama,dbo.diplomas_graduates.Graduate_046_CNP,                     
                         dbo.diplomas_graduates.Field_001_Value, dbo.diplomas_graduates.Field_002_Value, 
                         dbo.diplomas_graduates.Field_003_Value, dbo.diplomas_graduates.Field_004_Value, dbo.diplomas_graduates.Field_005_Value, dbo.diplomas_graduates.Field_006_Value, 
                         dbo.diplomas_graduates.Field_007_Value, dbo.diplomas_graduates.Field_008_Value, dbo.diplomas_graduates.Field_009_Value, dbo.diplomas_graduates.Field_010_Value, 
                         dbo.diplomas_graduates.Field_011_Value, dbo.diplomas_graduates.Field_012_Value, dbo.diplomas_graduates.Field_013_Value, dbo.diplomas_graduates.Field_014_Value, 
                         dbo.diplomas_graduates.Field_015_Value, dbo.diplomas_graduates.Field_016_Value, dbo.diplomas_graduates.Field_017_Value, dbo.diplomas_graduates.Field_018_Value, 
                         dbo.diplomas_graduates.Field_019_Value, dbo.diplomas_graduates.Field_020_Value, dbo.diplomas_graduates.Field_021_Value, dbo.diplomas_graduates.Field_022_Value, 
                         dbo.diplomas_graduates.Field_023_Value, dbo.diplomas_graduates.Field_024_Value, dbo.diplomas_graduates.Field_025_Value, dbo.diplomas_graduates.Field_026_Value, 
                         dbo.diplomas_graduates.Field_027_Value, dbo.diplomas_graduates.Field_028_Value, dbo.diplomas_graduates.Field_029_Value, dbo.diplomas_graduates.Field_030_Value
FROM            dbo.diplomas_graduates LEFT OUTER JOIN
                         dbo.diplomas_codes ON dbo.diplomas_graduates.Diploma_Code_Value = dbo.diplomas_codes.Diploma_Code_Value LEFT OUTER JOIN
                         dbo.diplomas_config ON dbo.diplomas_graduates.Diploma_Config_Id = dbo.diplomas_config.Diploma_Config_Id